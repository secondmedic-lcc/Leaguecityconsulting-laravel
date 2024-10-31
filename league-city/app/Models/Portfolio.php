<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $table = 'portfolio';
    protected $primaryKey = "id";

    protected $fillable = [
        'category',
        'name',
        'url_slug',
        'project_url',
        'heading',
        'sub_heading',
        'logo',
        'image',
        'banner',
        'desc_heading',
        'description',
        'banner_heading',
        'banner_sub_heading',
        'banner_details',
        'portfolio_status',
        'ordering',
        'status'
    ];
}
