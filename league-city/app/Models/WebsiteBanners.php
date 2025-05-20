<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WebsiteBanners extends Model
{
    use HasFactory;
    
    protected $table = 'website_banners';
    protected $primaryKey = "id";

    protected $fillable = [
        'page_name',
        'page_title',
        'heading',
        'sub_heading',
        'details',
        'banner_image',
        'button_text',
        'button_url',
        'status',
    ];
}
