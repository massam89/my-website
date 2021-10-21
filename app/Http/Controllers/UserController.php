<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() 
    {
        $user = User::all()->first();

        return view('user.index')->with('user', $user);
    }

    public function update(Request $request) 
    {
        $user = User::all()->first();

        $user->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        return redirect()->route('home')->with('message', 'User updated succesfully');
    }
}
