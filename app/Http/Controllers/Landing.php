<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;
use App\Models\Facts;

class Landing extends Controller
{
    public function index() {

        $owner = Owner::all()->first();

        $facts = Facts::all()->first();

        if(isset($owner)) {
            return view('welcome')->with('owner', $owner)->with('facts', $facts);
        }
        
        return view('defaultWelcome');
    }
}
