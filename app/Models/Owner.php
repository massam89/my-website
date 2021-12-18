<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $table = 'owner';

    protected $fillable = ['name', 'expertises', 'birthdate', 'website', 'phone', 'city', 'degree', 'email', 'address', 'twitter', 'facebook', 'instagram', 'linkedin', 'github', 'xing', 'avatar_url', 'bg_url', 'favicon_url', 'resume_url', 'about_text1', 'about_header', 'about_text2', 'about_text3', 'facts_text', 'skills_text', 'resume_text', 'portfolio_text', 'services_text', 'testimonials_text', 'contact_text' ];
}
