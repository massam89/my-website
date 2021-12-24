<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = ['experience_title', 'experience_date', 'experience_location', 'lang'];

    public function descriptions(){
        return $this->hasMany(Experience_description::class);
    }
}
