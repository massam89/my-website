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
        $testimonials = Testimonial::all();

        if($request->has('search')) {
            $testimonials = Testimonial::where('testimonial_text', 'like', "%{$request->search}%")->get();
        }

        return view('testimonial.index')->with('testimonials', $testimonials);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('testimonial.create');
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

            $request->testimonial_image_url->move(public_path('assets/img/owner/testimonial/'), $randnum . '.' . $testimonialExt); 
            $testimonial = 'assets/img/owner/testimonial/'. $randnum . '.' . $testimonialExt;
        } else {
            $testimonial = null;
        }

        Testimonial::create([
            'testimonial_image_url' => $testimonial,
            'testimonial_text' => $request->testimonial_text,
            'testimonial_name' => $request->testimonial_name,
            'testimonial_job' => $request->testimonial_job       
        ]);

        return redirect()->route('testimonial.index')->with('message', 'Testimonial has been created!');
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
        $testimonial = Testimonial::where('id', $id)->get()->first();
        
        return view('testimonial.edit')->with('testimonial', $testimonial);
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
        $testimonialExt = '';
        $testimonial1 = Testimonial::where('id', $id)->get()->first();

        if(isset($request->testimonial_image_url)){

            $randnum = uniqid();
            $testimonialExt = $request->testimonial_image_url->extension('');
            $request->testimonial_image_url->move(public_path('assets/img/owner/testimonial/'), $randnum . '.' . $testimonialExt); 
            $testimonial = 'assets/img/owner/testimonial/'. $randnum . '.' . $testimonialExt;
        } else {
            $testimonial = $testimonial1->testimonial_image_url;
        }

        $testimonial1->update([
            'testimonial_image_url' => $testimonial,
            'testimonial_text' => $request->testimonial_text,
            'testimonial_name' => $request->testimonial_name,
            'testimonial_job' => $request->testimonial_job   
        ]);

        return redirect()->route('testimonial.index')->with('message', 'Testimonial has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::where('id', $id)->get()->first();

        $testimonial->delete();

        return redirect()->route('testimonial.index')->with('message', 'Testimonial has been deleted!');
    }
}
