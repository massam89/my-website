<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;
use App\Models\Facts;
use App\Models\Skill;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Portfolio;
use App\Models\Testimonial;
use App\Models\Visibility;

class Landing extends Controller
{
    public function index(Request $request) {

        $owner = Owner::first();
        $facts = Facts::first();
        $skills = Skill::where('lang', $request->lang)->get(); 
        $educations = Education::where('lang', $request->lang)->get();
        $experiences = Experience::where('lang', $request->lang)->orderBy('created_at', 'desc')->with('descriptions')->get();
        $portfolios = Portfolio::where('lang', $request->lang)->get();
        $testimonials = Testimonial::where('lang', $request->lang)->get();
        $visibilities = Visibility::first();

        $categoreis = [];
        foreach ($portfolios as $portfolio) {
            $category = explode(',', $portfolio->portfolio_category);
            foreach ($category as $item){
                array_push( $categoreis, $item);
            }
        }
        $categoreis = array_unique($categoreis);

        if(isset($owner->name)) {
            if($request->lang == 'en' || $request->lang == 'fa'){
                return view('welcome', [
                    'owner' => $owner,
                    'facts' => $facts,
                    'skills' => $skills,
                    'educations' => $educations,
                    'experiences' => $experiences,
                    'portfolios' => $portfolios,
                    'categories' => $categoreis,
                    'testimonials' => $testimonials,
                    'visibilities' => $visibilities,
                    'lang' => $request->lang
                ]);
            }else {
                return redirect('/');
            }
            
        }else{
            return view('defaultWelcome');
        } 
    }
}
