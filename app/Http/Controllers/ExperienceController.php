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
        $experiences = Experience::where('lang', $request->lang)->get();

        if($request->has('search')) {
            $experiences = Experience::where('lang', $request->lang)->where('experience_title', 'like', "%{$request->search}%")->get();
        }

        return view('experiences.index', [
            'experiences'=> $experiences,
            'lang' => $request->lang
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($lang)
    {
        return view('experiences.create', ['lang' => $lang]);
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
            'experience_location' =>$request->experience_location,
            'lang' => $request->lang
        ]);

        foreach($request->experience_description as $description) {

            if($description != null) {
                Experience_description::create([
                'experience_id' => $experience->id,
                'experience_description_text' => $description
            ]);
            }   
        };

        return redirect()->route('experience.index', ['lang' => $request->lang])->with('message', $request->lang == 'en' ? 'Experience has been created!' : 'تجربه جدید اضافه شد');
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
        $experience = Experience::where('id', $id)->get()->first();
     
        return view('experiences.edit',[
            'experience' => $experience,
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

        $experience = Experience::where('id', $id)->get()->first();

        $experience->update([
            'experience_title' => $request->experience_title,
            'experience_date' =>$request->experience_date,
            'experience_location' =>$request->experience_location,
            'lang' => $request->lang
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

        return redirect()->route('experience.index', $lang)->with('message', $request->lang == 'en' ? 'Experience has been updated!' : 'تجربه بروز شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($lang, $id)
    {
        $experience = Experience::where('id', $id)->get()->first();

        $experience->delete();

        return redirect()->route('experience.index', $lang)->with('message', $lang == 'en' ? 'Experience has been deleted!' : 'تجربه حذف شد');
    }
}
