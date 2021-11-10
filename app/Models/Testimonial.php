<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = ['testimonial_image_url', 'testimonial_text', 'testimonial_name', 'testimonial_job'];
}
