<?php

namespace App\Http\Controllers;

use App\{Exports\UsersExport, Http\Requests\UserRequest, Models\Role, Models\User};
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\{RedirectResponse, Request};
use Illuminate\Support\Facades\{Hash, Storage};

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->authorizeResource(User::class);
    }

    public function index(Request $request)
    {
        $search = $request->get('search');
        $limit = $request->get('limit');

        return view('admin.pages.users')->with([
            'users' => User::query()
                ->when($search, fn($query) => $query->where('name', 'like', "%$search%"))
                ->paginate($limit),
            'roles' => Role::get(['id', 'name'])
        ]);
    }

    public function store(UserRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $validated['is_admin'] = $request->has('is_admin');
        if ($request->file('avatar')) {

            $avatar = $request->file('avatar');
            $validated['avatar'] = $avatar->storeAs('avatars', $avatar->hashName());
        }
        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        return back()->with('success', trans('admin.notification.success'));
    }

    public function update(UserRequest $request, User $user): RedirectResponse
    {

        $validated = $request->validated();
        $validated['is_admin'] = $request->has('is_admin');

        if (is_null($request->get('password'))) {
            unset($validated['password']);
        } else {
            $validated['password'] = Hash::make($validated['password']);
        }

        if ($request->file('avatar')) {

            $avatar = $request->file('avatar');
            $validated['avatar'] = $avatar->storeAs('avatars', $avatar->hashName());

            if (Storage::exists($user->getAttribute('avatar'))) {
                Storage::delete($user->getAttribute('avatar'));
            }
        }
        $user->update($validated);

        return back()->with('success', trans('admin.notification.success'));
    }

    public function destroy(User $user): RedirectResponse
    {
        $user->delete();
        return back()->with('success', trans('admin.notification.success'));
    }
    public function userExport()
    {
        return Excel::download(new UsersExport(), 'user-data.xlsx');
    }
}
