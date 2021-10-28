<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;

class EducationController extends Controller
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
        $educations = Education::all();

        if($request->has('search')) {
            $educations = Education::where('education_title', 'like', "%{$request->search}%")->get();
        }

        return view('education.index')->with('educations', $educations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('education.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Education::create([
            'education_title' => $request->education_title,
            'education_date' => $request->education_date,
            'education_location' => $request->education_location,
            'education_description' => $request->education_description
        ]);

        return redirect()->route('education.index')->with('message', 'Education has been created!');
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
        $education = Education::where('id', $id)->get()->first();
        
        return view('education.edit')->with('education', $education);
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
        $education = Education::where('id', $id)->get()->first();

        $education->update([
            'education_title' => $request->education_title,
            'education_date' => $request->education_date,
            'education_location' => $request->education_location,
            'education_description' => $request->education_description
        ]);

        return redirect()->route('education.index')->with('message', 'Education has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $education = Education::where('id', $id)->get()->first();

        $education->delete();

        return redirect()->route('education.index')->with('message', 'Education has been deleted!');
    }
}
