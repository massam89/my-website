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

    public function index($lang)
    {
        $owner = Owner::all()->first();

        return view('owner.index',[
            'owner' => $owner,
            'lang' => $lang
        ]);
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
                'name' => isset($request->name) ? $request->input('name') : $owner->name,
                'name_fa' => isset($request->name_fa) ? $request->input('name_fa') : $owner->name_fa,
                'expertises' => isset($request->expertises) ? $request->input('expertises') : $owner->expertises,
                'expertises_fa' => isset($request->expertises_fa) ? $request->input('expertises_fa') : $owner->expertises_fa,
                'birthdate' => $request->birthdate, 
                'website' => $request->website, 
                'phone' => $request->phone, 
                'city' => isset($request->city) ? $request->input('city') : $owner->city, 
                'city_fa' => isset($request->city_fa) ? $request->input('city_fa') : $owner->city_fa, 
                'degree' => isset($request->degree) ? $request->input('degree') : $owner->degree, 
                'degree_fa' => isset($request->degree_fa) ? $request->input('degree_fa') : $owner->degree_fa, 
                'email' => $request->email,
                'address' => isset($request->address) ? $request->input('address') : $owner->address,  
                'address_fa' => isset($request->address_fa) ? $request->input('address_fa') : $owner->address_fa,  
                'twitter' => $request->twitter,  
                'facebook' => $request->facebook,  
                'instagram' => $request->instagram,  
                'linkedin' => $request->linkedin,  
                'github' => $request->github,
                'about_text1' => isset($request->about_text1) ? $request->input('about_text1') : $owner->about_text1,
                'about_text1_fa' => isset($request->about_text1_fa) ? $request->input('about_text1_fa') : $owner->about_text1_fa,
                'about_text1_fa' => isset($request->about_text1_fa) ? $request->input('about_text1_fa') : $owner->about_text1_fa,
                'about_header' => isset($request->about_header) ? $request->input('about_header') : $owner->about_header,
                'about_header_fa' => isset($request->about_header_fa) ? $request->input('about_header_fa') : $owner->about_header_fa,
                'about_text2' => isset($request->about_text2) ? $request->input('about_text2') : $owner->about_text2,
                'about_text2_fa' => isset($request->about_text2_fa) ? $request->input('about_text2_fa') : $owner->about_text2_fa,
                'about_text3' => isset($request->about_text3) ? $request->input('about_text3') : $owner->about_text3,
                'about_text3_fa' => isset($request->about_text3_fa) ? $request->input('about_text3_fa') : $owner->about_text3_fa,
                'facts_text' => isset($request->facts_text) ? $request->input('facts_text') : $owner->facts_text,
                'facts_text_fa' => isset($request->facts_text_fa) ? $request->input('facts_text_fa') : $owner->facts_text_fa,
                'skills_text' => isset($request->skills_text) ? $request->input('skills_text') : $owner->skills_text,
                'skills_text_fa' => isset($request->skills_text_fa) ? $request->input('skills_text_fa') : $owner->skills_text_fa,
                'resume_text' => isset($request->resume_text) ? $request->input('resume_text') : $owner->resume_text,
                'resume_text_fa' => isset($request->resume_text_fa) ? $request->input('resume_text_fa') : $owner->resume_text_fa,
                'portfolio_text' => isset($request->portfolio_text) ? $request->input('portfolio_text') : $owner->portfolio_text,
                'portfolio_text_fa' => isset($request->portfolio_text_fa) ? $request->input('portfolio_text_fa') : $owner->portfolio_text_fa,
                'services_text' => isset($request->services_text) ? $request->input('services_text') : $owner->services_text,
                'services_text_fa' => isset($request->services_text_fa) ? $request->input('services_text_fa') : $owner->services_text_fa,
                'testimonials_text' => isset($request->testimonials_text) ? $request->input('testimonials_text') : $owner->testimonials_text,
                'testimonials_text_fa' => isset($request->testimonials_text_fa) ? $request->input('testimonials_text_fa') : $owner->testimonials_text_fa,
                'contact_text' => isset($request->contact_text) ? $request->input('contact_text') : $owner->contact_text,
                'contact_text_fa' => isset($request->contact_text_fa) ? $request->input('contact_text_fa') : $owner->contact_text_fa,
                'avatar_url' => $avatar, 
                'bg_url' => $bg,
                'favicon_url' => $favicon,
                'resume_url' => $resume
            ]);
        } else {
            Owner::create([
                'name' => $request->input('name'),
                'name_fa' => $request->input('name_fa'),
                'expertises' => $request->input('expertises'),
                'expertises_fa' => $request->input('expertises_fa'),
                'birthdate' => $request->birthdate, 
                'website' => $request->website, 
                'phone' => $request->phone, 
                'city' => $request->input('city'), 
                'city_fa' => $request->input('city_fa'),
                'degree' => $request->input('degree'),
                'degree_fa' => $request->input('degree_fa') ,
                'email' => $request->email,
                'address' => $request->input('address'),
                'address_fa' => $request->input('address_fa'),
                'twitter' => $request->twitter,  
                'facebook' => $request->facebook,  
                'instagram' => $request->instagram,  
                'linkedin' => $request->linkedin,  
                'github' => $request->github,
                'about_text1' =>  $request->input('about_text1'),
                'about_text1_fa' => $request->input('about_text1_fa') ,
                'about_text1_fa' => $request->input('about_text1_fa') ,
                'about_header' => $request->input('about_header') ,
                'about_header_fa' => $request->input('about_header_fa') ,
                'about_text2' => $request->input('about_text2') ,
                'about_text2_fa' => $request->input('about_text2_fa') ,
                'about_text3' => $request->input('about_text3') ,
                'about_text3_fa' => $request->input('about_text3_fa'),
                'facts_text' => $request->input('facts_text') ,
                'facts_text_fa' => $request->input('facts_text_fa') ,
                'skills_text' => $request->input('skills_text'),
                'skills_text_fa' => $request->input('skills_text_fa'),
                'resume_text' => $request->input('resume_text') ,
                'resume_text_fa' => $request->input('resume_text_fa') ,
                'portfolio_text' => $request->input('portfolio_text') ,
                'portfolio_text_fa' =>  $request->input('portfolio_text_fa') ,
                'services_text' => $request->input('services_text') ,
                'services_text_fa' => $request->input('services_text_fa') ,
                'testimonials_text' => $request->input('testimonials_text'),
                'testimonials_text_fa' =>  $request->input('testimonials_text_fa') ,
                'contact_text' =>  $request->input('contact_text') ,
                'contact_text_fa' => $request->input('contact_text_fa'),
                'avatar_url' => $avatar, 
                'bg_url' => $bg,
                'favicon_url' => $favicon,
                'resume_url' => $resume
            ]);
        }

        return view('home', [
            'message' => ($request->lang == 'en') ? 'Owner details have been changed!' : 'اطلاعات اصلی بروز شد',
            'lang' => $request->lang
        ]);
    }
}
