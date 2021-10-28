<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;
use App\Models\Facts;
use App\Models\Skill;

class Landing extends Controller
{
    public function index() {

        $owner = Owner::all()->first();

        $facts = Facts::all()->first();

        $skills = Skill::all();

        if(isset($owner)) {
            return view('welcome')->with('owner', $owner)->with('facts', $facts)->with('skills', $skills);
        }
        
        return view('defaultWelcome');
    }
}
