<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    //

    public function index()
    {
        $roles = Role::all();
        $permissions = Permission::all();
        return view('backend.roles.index', compact('roles', 'permissions'));
    }

    public function store(Request $request)
    {
        $request->validate(['role' => 'required|string']);
        $role = Role::create(['name' => $request->role]);

        return redirect()->back()->with('role', $role);
    }

    public function storePermission(Request $request)
    {
        $request->validate(['permission' => 'required|string']);
        $permission = Permission::create(['name' => $request->permission]);

        return redirect()->back()->with('permission', $permission);
    }

    public function delete(Request $request)
    {
        if ($request->has('permission_id')) {
            $permission = Permission::find($request->permission_id);
            if ($permission) {
                $permission->delete();
                return redirect()->back()->with('good', 'supprission ok');
            }
            return redirect()->back()->with('error', 'supprission problem');
        }

        if ($request->has('role_id')) {
            $role = Role::find($request->role_id);
            if ($role) {
                $role->delete();
                return redirect()->back()->with('good', 'supprission ok');
            }
            return redirect()->back()->with('error', 'supprission problem');
        }
    }
}
