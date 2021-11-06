<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;
use App\Models\Facts;
use App\Models\Skill;
use App\Models\Education;
use App\Models\Experience;

class Landing extends Controller
{
    public function index() {

        $owner = Owner::all()->first();
        $facts = Facts::all()->first();
        $skills = Skill::all();
        $educations = Education::all();
        $experiences = Experience::all();

        if(isset($owner)) {
            return view('welcome', [
                'owner' => $owner,
                'facts' => $facts,
                'skills' => $skills,
                'educations' =>$educations,
                'experiences' =>$experiences
            ]);
        }
        
        return view('defaultWelcome');
    }
}
