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
            'name' => isset($request->name) ? $request->name : $user->name,
            'name_fa' => isset($request->name_fa) ? $request->name_fa : $user->name_fa,
            'email' => $request->email
        ]);

        return view('home',[
            'message' => $request->lang == 'en' ? 'User updated succesfully' : 'بروزرسانی کاربر با موفقیت انجام شد',
            'lang' => $request->lang
        ]);
    }
}
