<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facts extends Model
{
    use HasFactory;

    protected $table = 'facts';

    protected $fillable = [
       'clients_number',
       'clients_number_fa',
        'clients_title',
        'clients_title_fa',
       'projects_number',
       'projects_number_fa',
        'projects_title',
        'projects_title_fa',
       'hours_number',
       'hours_number_fa',
        'hours_title',
        'hours_title_fa',
       'workers_number',
       'workers_number_fa',
        'workers_title',
        'workers_title_fa'
    ];
} 
