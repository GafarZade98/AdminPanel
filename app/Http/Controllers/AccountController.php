<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.pages.account')->with([
            'user' => auth()->user(),
            'roles' => Role::get(['id', 'name'])
        ]);
    }

    public function edit(UserRequest $request, User $user): RedirectResponse
    {
        $validated = $request->validated();

        if(is_null($request->get('password'))){
            unset($validated['password']);
        }else{
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

    public function deleteAvatar(User $user)
    {
        $avatar = $user->getAttribute('avatar');

        if (Storage::exists($avatar)) {
            if (Storage::delete($avatar)) {
                $user->update(['avatar' => null]);
            }
        }
        return back()->with('success', trans('admin.notification.success'));
    }
}
