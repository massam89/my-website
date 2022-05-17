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

    public function index(Request $request)
    {
        $facts = Facts::first();

        return view('facts.index', [
            'facts' => $facts,
            'lang' => $request->lang
        ]);
    }

    public function update(Request $request)
    {
        $facts = Facts::first();

        $facts->update([
            'clients_number' => isset($request->clients_number) ? $request->clients_number : $facts->clients_number,
            'clients_title' => isset($request->clients_title) ? $request->clients_title : $facts->clients_title,
            'projects_number' => isset($request->projects_number) ? $request->projects_number : $facts->projects_number,
            'projects_title' => isset($request->projects_title) ? $request->projects_title : $facts->projects_title,
            'hours_number' => isset($request->hours_number) ? $request->hours_number : $facts->hours_number,
            'hours_title' => isset($request->hours_title) ? $request->hours_title : $facts->hours_title,
            'workers_number' => isset($request->workers_number) ? $request->workers_number : $facts->workers_number,
            'workers_title' => isset($request->workers_title) ? $request->workers_title : $facts->workers_title,
            'clients_number_fa' => isset($request->clients_number_fa) ? $request->clients_number_fa : $facts->clients_number_fa,
            'clients_title_fa' => isset($request->clients_title_fa) ? $request->clients_title_fa : $facts->clients_title_fa,
            'projects_number_fa' => isset($request->projects_number_fa) ? $request->projects_number_fa : $facts->projects_number_fa,
            'projects_title_fa' => isset($request->projects_title_fa) ? $request->projects_title_fa : $facts->projects_title_fa,
            'hours_number_fa' => isset($request->hours_number_fa) ? $request->hours_number_fa : $facts->hours_number_fa,
            'hours_title_fa' => isset($request->hours_title_fa) ? $request->hours_title_fa : $facts->hours_title_fa,
            'workers_number_fa' => isset($request->workers_number_fa) ? $request->workers_number_fa : $facts->workers_number_fa,
            'workers_title_fa' => isset($request->workers_title_fa) ? $request->workers_title_fa : $facts->workers_title_fa
        ]);
        
        return redirect()->route('home', ['lang' => $request->lang]);
    }
}
