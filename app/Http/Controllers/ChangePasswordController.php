<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function change_password(Request $request) 
    {
        $request->validate([
            'password' => 'required|min:6|max:100',
            'password_confirmation' => 'required|min:6|same:password'
        ]);

        $user = User::all()->first();

        $user->update([
            'password' => Hash::make($request->password)
        ]);

        return view('home',[
            'lang' => $request->lang
        ]);
    }
}
