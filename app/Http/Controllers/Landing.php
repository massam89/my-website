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

        $owner = Owner::all()->first();
        $facts = Facts::all()->first();
        $skills = Skill::all();
        $educations = Education::all();
        $experiences = Experience::with('descriptions')->get();
        $portfolios = Portfolio::all();
        $testimonials = Testimonial::all();
        $visibilities = Visibility::all()->first();

        $categoreis = [];
        foreach ($portfolios as $portfolio) {
            $category = explode(',', $portfolio->portfolio_category);
            foreach ($category as $item){
                array_push( $categoreis, $item);
            }
        }
        $categoreis = array_unique($categoreis);

        if(isset($owner->name)){
            switch($request->lang) {
                case 'en':
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
    
                case 'pe':
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
    
                default:
                  return  redirect('/');
            }
        }else{
            return view('defaultWelcome');
        }
    }
}
