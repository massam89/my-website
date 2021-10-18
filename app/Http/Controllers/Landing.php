<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;

class Landing extends Controller
{
    public function index() {

        $owner = Owner::all();

        return view('welcome')->with('owners', $owner[0]);
    }
}
