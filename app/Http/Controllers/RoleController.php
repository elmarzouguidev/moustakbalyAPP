<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    //

    public function index()
    {
        $roles = Role::all();
        return view('backend.roles.index', compact('roles'));
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|unique:roles']);
        $role = Role::create(['name' => $request->name]);

        return redirect()->back()->with('role', $role);
    }
}
