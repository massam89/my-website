<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $table = 'owner';

    protected $fillable = ['name', 'expertises', 'birthdate', 'website', 'phone', 'city', 'degree', 'email', 'address', 'avatar_url', 'bg_url', 'favicon_url' ];
}
