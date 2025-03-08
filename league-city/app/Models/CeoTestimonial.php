<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CeoTestimonial extends Model
{
    use HasFactory;
    protected $table = 'ceo_testimonials';
    protected $fillable = ['name', 'designation', 'image', 'description'];  
}
