<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visibility;

class VisibilityController extends Controller
{
    public function index(Request $request) 
    {
        $visibilities = Visibility::all()->first();

        return view('visibility.index', [
            'visibilities'=> $visibilities,
            'lang' => $request->lang
        ]);
    }

    public function update(Request $request)
    {
        $visibilities = Visibility::all()->first();
  
        ($request->about == 'on') ? $visibilities->update(['about' => true]) : $visibilities->update(['about' => false]);
        ($request->fact == 'on') ? $visibilities->update(['fact' => true]) : $visibilities->update(['fact' => false]);
        ($request->skill == 'on') ? $visibilities->update(['skill' => true]) : $visibilities->update(['skill' => false]);
        ($request->resume == 'on') ? $visibilities->update(['resume' => true]) : $visibilities->update(['resume' => false]);
        ($request->education == 'on') ? $visibilities->update(['education' => true]) : $visibilities->update(['education' => false]);
        ($request->experience == 'on') ? $visibilities->update(['experience' => true]) : $visibilities->update(['experience' => false]);
        ($request->portfolio == 'on') ? $visibilities->update(['portfolio' => true]) : $visibilities->update(['portfolio' => false]);
        ($request->service == 'on') ? $visibilities->update(['service' => true]) : $visibilities->update(['service' => false]);
        ($request->testimonial == 'on') ? $visibilities->update(['testimonial' => true]) : $visibilities->update(['testimonial' => false]);
        ($request->contact == 'on') ? $visibilities->update(['contact' => true]) : $visibilities->update(['contact' => false]);



        return view('home', [
            'message'=> $request->lang == 'en' ? 'Visibilities have updated!' : 'تنظیمات نمایش بروز شد',
            'lang' => $request->lang
        ]);
       
    }
}
