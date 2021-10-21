<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function change_password(Request $request) 
    {

       $user = User::all()->first();

        $user->update([
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('user.index')->with('message', 'User\'s password successfully edited! ');
    }
}
