<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $skills = Skill::where('lang', $request->lang)->get();

        if($request->has('search')) {
            $skills = Skill::where('lang', $request->lang)->where('skill_name', 'like', "%{$request->search}%")->get();
        }

        return view('skills.index', [
            'skills' => $skills,
            'lang' => $request->lang
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('skills.create', ['lang' => $request->lang]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Skill::create([
            'skill_name' => $request->skill_name,
            'skill_percentage' => $request->skill_percentage,
            'lang' => $request->lang
        ]);

        return redirect()->route('skills.index',[ 
            'lang' => $request->lang
        ])->with('message', 'Skill has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($lang, $id)
    {
        $skill = Skill::where('id', $id)->get()->first();
        
        return view('skills.edit', [
            'skill'=> $skill,
            'lang' => $lang
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $lang, $id)
    {
        $skill = Skill::where('id', $id)->get()->first();

        $skill->update([
            'skill_name' => $request->skill_name,
            'skill_percentage' => $request->skill_percentage,
            'lang' => $lang
        ]);

        return redirect()->route('skills.index', [
            'message' => 'Skill has been updated!',
            'lang' => $lang
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($lang, $id)
    {
        $skill = Skill::where('id', $id)->get()->first();

        $skill->delete();

        return redirect()->route('skills.index',[
            'message' => 'Skill has been deleted!',
            'lang' => $lang
        ]);
    }
}
