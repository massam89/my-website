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
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);

       $user = User::all()->first();

        $user->update([
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('home')->with('message', 'User\'s password successfully edited! ');
    }
}
