<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facts;

class FactsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $facts = Facts::all()->first();

        return view('facts.index')->with('facts', $facts);
    }

    public function update(Request $request)
    {
        $facts = Facts::all()->first();

        $facts->update([
            'clients_number' => $request->clients_number,
            'clients_title' => $request->clients_title,
            'projects_number' => $request->projects_number,
            'projects_title' => $request->projects_title,
            'hours_number' => $request->hours_number,
            'hours_title' => $request->hours_title,
            'workers_number' => $request->workers_number,
            'workers_title' => $request->workers_title
        ]);

        return redirect()->route('home');

    }
}
