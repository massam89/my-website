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
        
        $educations = Education::where('lang', $request->lang)->get();

        if($request->has('search')) {
            $educations = Education::where('lang', $request->lang)->where('education_title', 'like', "%{$request->search}%")->get();
        }

        return view('education.index', [
            'educations'=> $educations,
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
        return view('education.create', [ 'lang' => $lang]);
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
            'education_description' => $request->education_description,
            'lang' => $request->lang
        ]);

        return redirect()->route('education.index', [
            'lang' => $request->lang
        ])->with('message', $request->lang == 'en' ? 'Education has been created!' : 'تحصیلات جدید ایجاد شد');
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
        $education = Education::where('id', $id)->get()->first();
        
        return view('education.edit',[
            'education' => $education,
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
        $education = Education::where('id', $id)->get()->first();

        $education->update([
            'education_title' => $request->education_title,
            'education_date' => $request->education_date,
            'education_location' => $request->education_location,
            'education_description' => $request->education_description,
            'lang' => $lang
        ]);

        return redirect()->route('education.index', ['lang' => $lang])->with('message', $lang == 'en' ? 'Education has been updated!' : 'تحصیلات بروز شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($lang, $id)
    {
        $education = Education::where('id', $id)->get()->first();

        $education->delete();

        return redirect()->route('education.index', ['lang' => $lang])->with('message', $lang == 'en' ? 'Education has been deleted!' : 'تحصیلات حذف شد');
    }
}
