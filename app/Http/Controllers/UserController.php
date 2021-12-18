<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request) 
    {
        $user = User::all()->first();

        return view('user.index', [
            'user' => $user,
            'lang' => $request->lang
        ]);
    }

    public function update(Request $request) 
    {
        $user = User::all()->first();

        $user->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        return view('home',[
            'message' => 'User updated succesfully',
            'lang' => $request->lang
        ]);
    }
}
