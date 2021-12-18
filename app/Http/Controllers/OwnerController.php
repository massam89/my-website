<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;

class OwnerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $owner = Owner::all()->first();

        return view('owner.index')->with('owner', $owner);
    }

    public function store(Request $request)
    {
        $avatarExt = '';
        $bgExt = '';
        $favExt = '';
        $resumeExt = '';

        $owner = Owner::all()->first();
        
        if(isset($request->avatar_url)){
            $avatarExt = $request->avatar_url->extension();
            $request->avatar_url->move(public_path('assets/img/owner'), 'avatar.' . $avatarExt); 
            $avatar = 'assets/img/owner/avatar.' . $avatarExt;
        } else {
            $avatar = $owner ? $owner->avatar_url : null;
        }

        if(isset($request->bg_url)){
            $bgExt = $request->bg_url->extension();
            $request->bg_url->move(public_path('assets/img/owner'), 'hero-bg.' . $bgExt); 
            $bg = 'assets/img/owner/hero-bg.' . $bgExt;
        } else {
            $bg = $owner ? $owner->bg_url : null;
        }

        if(isset($request->favicon_url)){
            $favExt = $request->favicon_url->extension();
            $request->favicon_url->move(public_path('assets/img/owner'), 'favicon.' . $favExt); 
            $favicon = 'assets/img/owner/favicon.' . $favExt;
        } else {
            $favicon = $owner ? $owner->favicon_url : null;
        }
        
        if(isset($request->resume_url)){
            $resumeExt = $request->resume_url->extension();
            $request->resume_url->move(public_path('assets/img/owner'), 'resume.' . $resumeExt); 
            $resume = 'assets/img/owner/resume.' . $resumeExt;
        } else {
            $resume = $owner ? $owner->resume_url : null;
        }
        
        if(isset($owner)){
        
         Owner::where('id', 1)->update([
                'name' => $request->input('name'),
                'expertises' => $request->input('expertises'),
                'birthdate' => $request->input('birthdate'), 
                'website' => $request->input('website'), 
                'phone' => $request->input('phone'), 
                'city' => $request->input('city'), 
                'degree' => $request->input('degree'), 
                'email' => $request->input('email'),
                'address' => $request->input('address'),  
                'twitter' => $request->input('twitter'),  
                'facebook' => $request->input('facebook'),  
                'instagram' => $request->input('instagram'),  
                'linkedin' => $request->input('linkedin'),  
                'github' => $request->input('github'),
                'xing' => $request->input('xing'),
                'about_text1' => $request->input('about_text1'),
                'about_header' => $request->input('about_header'),
                'about_text2' => $request->input('about_text2'),
                'about_text3' => $request->input('about_text3'),
                'facts_text' => $request->input('facts_text'),
                'skills_text' => $request->input('skills_text'),
                'resume_text' => $request->input('resume_text'),
                'portfolio_text' => $request->input('portfolio_text'),
                'services_text' => $request->input('services_text'),
                'testimonials_text' => $request->input('testimonials_text'),
                'contact_text' => $request->input('contact_text'),
                'avatar_url' => $avatar, 
                'bg_url' => $bg,
                'favicon_url' => $favicon,
                'resume_url' => $resume
            ]);
        } else {
            Owner::create([
                'name' => $request->input('name'),
                'expertises' => $request->input('expertises'),
                'birthdate' => $request->input('birthdate'), 
                'website' => $request->input('website'), 
                'phone' => $request->input('phone'), 
                'city' => $request->input('city'), 
                'degree' => $request->input('degree'), 
                'email' => $request->input('email'),  
                'address' => $request->input('address'),
                'twitter' => $request->input('twitter'),
                'facebook' => $request->input('facebook'),
                'instagram' => $request->input('instagram'),
                'linkedin' => $request->input('linkedin'),
                'github' => $request->input('github'),
                'xing' => $request->input('xing'),
                'about_text1' => $request->input('about_text1'),
                'about_header' => $request->input('about_header'),
                'about_text2' => $request->input('about_text2'),
                'about_text3' => $request->input('about_text3'),
                'facts_text' => $request->input('facts_text'),
                'skills_text' => $request->input('skills_text'),
                'skills_text' => $request->input('skills_text'),
                'resume_text' => $request->input('resume_text'),
                'portfolio_text' => $request->input('portfolio_text'),
                'services_text' => $request->input('services_text'),
                'testimonials_text' => $request->input('testimonials_text'),
                'contact_text' => $request->input('contact_text'),
                'avatar_url' => $avatar, 
                'bg_url' => $bg,
                'favicon_url' => $favicon,
                'resume_url' => $resume
            ]);
        }

        return redirect('/home')->with('message', 'Owner details have been changed!');
    }
}
