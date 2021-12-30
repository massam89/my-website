<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
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
        $testimonials = Testimonial::where('lang', $request->lang)->get();

        if($request->has('search')) {
            $testimonials = Testimonial::where('lang', $request->lang)->where('testimonial_text', 'like', "%{$request->search}%")->get();
        }

        return view('testimonial.index', [
            'testimonials'=> $testimonials,
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
        return view('testimonial.create', ['lang' => $lang]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $testimonialExt = '';
        
        if(isset($request->testimonial_image_url)){

            $randnum = uniqid();

            $testimonialExt = $request->testimonial_image_url->extension('');

            $request->testimonial_image_url->move(public_path('/assets/img/owner/testimonial/'), $randnum . '.' . $testimonialExt); 
            $testimonial = '/assets/img/owner/testimonial/'. $randnum . '.' . $testimonialExt;
        } else {
            $testimonial = null;
        }

        Testimonial::create([
            'testimonial_image_url' => $testimonial,
            'testimonial_text' => $request->testimonial_text,
            'testimonial_name' => $request->testimonial_name,
            'testimonial_job' => $request->testimonial_job,
            'lang' => $request->lang       
        ]);

        return redirect()->route('testimonial.index', ['lang' => $request->lang])->with('message', $request->lang == 'en' ? 'Testimonial has been created!' : 'نظر جدید ثبت شد');
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
        $testimonial = Testimonial::where('id', $id)->get()->first();
        
        return view('testimonial.edit', [
            'testimonial'=> $testimonial,
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
        $testimonialExt = '';
        $testimonial1 = Testimonial::where('id', $id)->get()->first();

        if(isset($request->testimonial_image_url)){

            $randnum = uniqid();
            $testimonialExt = $request->testimonial_image_url->extension('');
            $request->testimonial_image_url->move(public_path('/assets/img/owner/testimonial/'), $randnum . '.' . $testimonialExt); 
            $testimonial = '/assets/img/owner/testimonial/'. $randnum . '.' . $testimonialExt;
        } else {
            $testimonial = $testimonial1->testimonial_image_url;
        }

        $testimonial1->update([
            'testimonial_image_url' => $testimonial,
            'testimonial_text' => $request->testimonial_text,
            'testimonial_name' => $request->testimonial_name,
            'testimonial_job' => $request->testimonial_job,
            'lang' => $lang
        ]);

        return redirect()->route('testimonial.index', $lang)->with('message',  $request->lang == 'en' ? 'Testimonial has been updated!' : 'نظر بروز شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($lang, $id)
    {
        $testimonial = Testimonial::where('id', $id)->get()->first();

        $testimonial->delete();

        return redirect()->route('testimonial.index', $lang)->with('message',  $lang == 'en' ? 'Testimonial has been deleted!' : 'نظر حذف شد');
    }
}
