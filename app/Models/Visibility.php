<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visibility extends Model
{
    use HasFactory;

    protected $table = 'visibility';

    protected $fillable = [
        'about',
        'fact',
        'skill',
        'resume',
        'education',
        'experience',
        'portfolio',
        'service',
        'testimonial',
        'contact',
    ];
}
