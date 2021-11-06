<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;
use App\Models\Experience_description;

class ExperienceController extends Controller
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
        $experiences = Experience::all();

        if($request->has('search')) {
            $experiences = Experience::where('experience_title', 'like', "%{$request->search}%")->get();
        }

        return view('experiences.index')->with('experiences', $experiences);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('experiences.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $experience = Experience::create([
            'experience_title' => $request->experience_title,
            'experience_date' =>$request->experience_date,
            'experience_location' =>$request->experience_location
        ]);

        foreach($request->experience_description as $description) {

            if($description != null) {
                Experience_description::create([
                'experience_id' => $experience->id,
                'experience_description_text' => $description
            ]);
            }   
        };

        return redirect()->route('experience.index')->with('message', 'Experience has been created!');
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
    public function edit($id)
    {
        $experience = Experience::where('id', $id)->get()->first();
     
        return view('experiences.edit')->with('experience', $experience);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $experience = Experience::where('id', $id)->get()->first();

        $experience->update([
            'experience_title' => $request->experience_title,
            'experience_date' =>$request->experience_date,
            'experience_location' =>$request->experience_location
        ]);

        $descriptions= Experience_description::where('experience_id', $id)->get();

        foreach($descriptions as $description) {
            $description->delete();
        }

        foreach($request->experience_description as $description) {

            if($description != null) {
                Experience_description::create([
                'experience_id' => $experience->id,
                'experience_description_text' => $description
            ]);
            }   
        };

        return redirect()->route('experience.index')->with('message', 'Experience has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $experience = Experience::where('id', $id)->get()->first();

        $experience->delete();

        return redirect()->route('experience.index')->with('message', 'Experience has been deleted!');
    }
}
