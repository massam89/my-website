<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;

class Landing extends Controller
{
    public function index() {

        $owner = Owner::all()->first();

        if(isset($owner)) {
            return view('welcome')->with('owner', $owner);
        }
        
        return view('defaultWelcome');
    }
}
