<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facts extends Model
{
    use HasFactory;

    protected $table = 'facts';

    protected $fillable = ['clients_number', 'clients_title', 'projects_number', 'projects_title', 'hours_number', 'hours_title', 'workers_number', 'workers_title'];
} 
