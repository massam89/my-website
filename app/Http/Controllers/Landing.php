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
use Illuminate\Support\Facades\Cache;

class Landing extends Controller
{
    public function index() {

        $owner = Cache::rememberForever('owner', function () {
            return Owner::all()->first();
        });
        $facts = Cache::rememberForever('facts', function () {
            return Facts::all()->first();
        });
        $skills = Cache::rememberForever('skills', function () {
            return Skill::all();
        });
        $educations = Cache::rememberForever('educations', function () {
            return Education::all();
        });
        $experiences = Cache::rememberForever('experiences', function () {
            return Experience::with('descriptions')->get();
        });
        $portfolios = Cache::rememberForever('portfolios', function () {
            return Portfolio::all();
        });
        $testimonials = Cache::rememberForever('testimonials', function () {
            return Testimonial::all();
        });
        $visibilities = Cache::rememberForever('visibilities', function () {
            return Visibility::all()->first();
        });

        $categoreis = [];
        foreach ($portfolios as $portfolio) {
            $category = explode(',', $portfolio->portfolio_category);
            foreach ($category as $item){
                array_push( $categoreis, $item);
            }
        }
        $categoreis = array_unique($categoreis);

        if(isset($owner)) {
            return view('welcome', [
                'owner' => $owner,
                'facts' => $facts,
                'skills' => $skills,
                'educations' => $educations,
                'experiences' => $experiences,
                'portfolios' => $portfolios,
                'categories' => $categoreis,
                'testimonials' => $testimonials,
                'visibilities' => $visibilities
            ]);
        }
        
        return view('defaultWelcome');
    }
}
