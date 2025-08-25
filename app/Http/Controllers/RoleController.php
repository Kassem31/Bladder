<?php
// app/Http/Controllers/RoleController.php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\Permission;

class RoleController extends Controller
{
    public function index()
    {
        $this->checkPermission('list_role');

        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }

    public function create()
    {
        $this->checkPermission('create_role');

        $permissions = Permission::all()->groupBy(function ($permission) {
            return explode('_', $permission->name)[1];
        });

        return view('roles.create', compact('permissions'));
    }

    public function store(Request $request)
    {
        $this->checkPermission('create_role');

        $role = Role::create($request->only('name', 'display_name', 'description'));
        $role->permissions()->sync($request->permissions);
        return redirect()->route('roles.index');
    }

    public function show($id)
    {
        $this->checkPermission('show_role');

        $role = Role::with('permissions')->findOrFail($id);
        return view('roles.show', compact('role'));
    }

    public function edit($id)
    {
        $this->checkPermission('edit_role');

        $role = Role::findOrFail($id);
        $permissions = Permission::all()->groupBy(function ($permission) {
            return explode('_', $permission->name)[1]; // Assuming permission names are in the format 'action_model'
        });

        return view('roles.edit', compact('role', 'permissions'));
    }

    public function update(Request $request, $id)
    {
        $this->checkPermission('edit_role');

        $role = Role::findOrFail($id);
        $role->update($request->only('name', 'display_name', 'description'));
        $role->permissions()->sync($request->permissions);
        return redirect()->route('roles.index');
    }

    public function destroy(Role $role)
    {
        $this->checkPermission('delete_role');

        if ($role->users()->count() > 0) {
            return redirect()->route('roles.index')->with('error', __('common.role_delete_in_use'));
        }
        $role->delete();
        return redirect()->route('roles.index')->with('success', __('common.role_deleted'));
    }
}
