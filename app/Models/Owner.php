<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $table = 'owner';

    protected $fillable = [
        'name',
        'name_fa',
        'expertises',
        'expertises_fa',
        'birthdate', 
        'website', 
        'phone', 
        'city', 
        'city_fa', 
        'degree', 
        'degree_fa', 
        'email',
        'address',  
        'address_fa',  
        'twitter',  
        'facebook',  
        'instagram',  
        'linkedin',  
        'github',
        'about_text1',
        'about_text1_fa',
        'about_header',
        'about_header_fa',
        'about_text2',
        'about_text2_fa',
        'about_text3',
        'about_text3_fa',
        'facts_text',
        'facts_text_fa',
        'skills_text',
        'skills_text_fa',
        'resume_text',
        'resume_text_fa',
        'portfolio_text',
        'portfolio_text_fa',
        'services_text',
        'services_text_fa',
        'testimonials_text',
        'testimonials_text_fa',
        'contact_text',
        'contact_text_fa',
        'avatar_url', 
        'bg_url',
        'favicon_url',
        'resume_url'
    ];
}
