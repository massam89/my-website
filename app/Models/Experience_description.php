<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience_description extends Model
{
    use HasFactory;

    protected $fillable = ['experience_id', 'experience_description_text'];
}
