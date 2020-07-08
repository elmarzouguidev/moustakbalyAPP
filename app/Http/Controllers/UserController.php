<?php

namespace App\Http\Controllers;

use App\Mail\sendPassword;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
class UserController extends Controller
{
    //

    public function index()
    {
        $users = User::all();
        return view('backend.users.index', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|string'
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        Mail::to($request->email)->send(new sendPassword($request->only(['name','email','password'])));
        return back()->with('user', $user);
    }
}
