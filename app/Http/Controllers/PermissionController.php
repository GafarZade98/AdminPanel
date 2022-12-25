<?php

namespace App\Http\Controllers;

use Illuminate\Http\{RedirectResponse, Request};
use App\Http\Requests\PermissionRequest;
use App\Models\Permission;

class PermissionController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        $limit = $request->get('limit');

        return view('admin.pages.permissions')->with([
            'permissions' => Permission::query()
                ->when($search, fn ($query) => $query->where('name', 'like', "%$search%"))
                ->orderBy('name')->paginate($limit),
        ]);
    }

    public function store(PermissionRequest $request): RedirectResponse
    {
        Permission::create($request->validated());
        return back()->with('success', trans('admin.notification.success'));
    }

    public function update(PermissionRequest $request, Permission $permission): RedirectResponse
    {
        $permission->update($request->validated());
        return back()->with('success', trans('admin.notification.success'));
    }

    public function destroy(Permission $permission): RedirectResponse
    {
        $permission->delete();
        return back()->with('success', trans('admin.notification.success'));
    }
}
