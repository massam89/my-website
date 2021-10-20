<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;

class OwnerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $owner = Owner::all()->first();

        return view('owner.index')->with('owner', $owner);
    }

    public function store(Request $request)
    {

        $owner = Owner::all()->first();
        
        if(isset($request->avatar_url)){
            $avatarExt = $request->avatar_url->extension();
            $request->avatar_url->move(public_path('assets/img/owner'), 'avatar.' . $avatarExt); 
            $avatar = 'assets/img/owner/avatar.' . $avatarExt;
        } else {
            $avatar = $owner->avatar_url;
        }

        if(isset($request->bg_url)){
            $bgExt = $request->bg_url->extension();
            $request->bg_url->move(public_path('assets/img/owner'), 'hero-bg.' . $bgExt); 
            $bg = 'assets/img/owner/hero-bg.' . $bgExt;
        } else {
            $bg = $owner->bg_url;
        }
        
        if(isset($owner)){
        
         Owner::where('id', 1)->update([
                'name' => $request->input('name'),
                'expertises' => $request->input('expertises'),
                'birthdate' => $request->input('birthdate'), 
                'website' => $request->input('website'), 
                'phone' => $request->input('phone'), 
                'city' => $request->input('city'), 
                'degree' => $request->input('degree'), 
                'email' => $request->input('email'),  
                'avatar_url' => $avatar, 
                'bg_url' => $bg,
                'address' => $request->input('address')
            ]);
        } else {
            Owner::create([
                'name' => $request->input('name'),
                'expertises' => $request->input('expertises'),
                'birthdate' => $request->input('birthdate'), 
                'website' => $request->input('website'), 
                'phone' => $request->input('phone'), 
                'city' => $request->input('city'), 
                'degree' => $request->input('degree'), 
                'email' => $request->input('email'),  
                'avatar_url' => 'assets/img/owner/avatar.' . $avatarExt, 
                'bg_url' => 'assets/img/owner/hero-bg.' . $bgExt,
                'address' => $request->input('address')
            ]);
        }

        return redirect('/home')->with('message', 'Owner details have been changed!');
    }
}
