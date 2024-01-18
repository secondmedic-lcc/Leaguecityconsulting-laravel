<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SPWebsiteControl extends Model
{
    use HasFactory;
    protected $table = 'sp_website_control';
    protected $primaryKey = "id";
    
    protected $fillable = [
        'service_provider_id',
        'shop_email',
        'shop_contact',
        'shop_full_address',
        'heading',
        'sub_heading',
        'header_bg_image',
        'about_us',
        'about_us_image',
        'map_embed',
        'facebook',
        'instagram',
        'twitter',
        'linkedin',
        'youtube',
        'pinterest',
        'footer_heading',
        'status',
    ];

    protected $casts = [
        'status' => 'integer',
    ];
}
