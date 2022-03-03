<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\{RedirectResponse, Request};
use App\Http\Requests\RoleRequest;
use App\Models\Role;

class RoleController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        $limit = $request->get('limit');

        return view('admin.pages.roles')->with([
            'permissions' => Permission::get(['id', 'name']),
            'roles' => Role::query()
                ->when($search, fn ($query) => $query->where('name', 'like', "%$search%"))
                ->paginate($limit),
        ]);
    }

    public function store(RoleRequest $request): RedirectResponse
    {
        $role = Role::create($request->validated());
        $role->permission()->attach($request->input('permissions'));

        return back()->with('success', trans('admin.notification.success'));
    }

    public function update(RoleRequest $request, Role $role): RedirectResponse
    {
        $role->update($request->validated());
        $role->permissions()->sync($request->input('permissions'));
        return back()->with('success', trans('admin.notification.success'));
    }

    public function destroy(Role $role): RedirectResponse
    {
        $role->delete();
        return back()->with('success', trans('admin.notification.success'));
    }
}
