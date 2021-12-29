<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = ['portfolio_title', 'portfolio_description', 'portfolio_link', 'portfolio_category', 'portfolio_image_link', 'lang'];
}
