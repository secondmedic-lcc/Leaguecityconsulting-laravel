<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    use HasFactory;

    protected $table = 'industry';
    protected $primaryKey = "id";

    protected $fillable = [
        'name', 'url_slug', 'industry_url', 'heading', 'sub_heading', 'industry_image', 'description', 'status'
    ];
}
