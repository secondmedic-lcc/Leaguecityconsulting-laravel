<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeoData extends Model
{
    use HasFactory;

    protected $table = 'seo_data';
    protected $primaryKey = "id";
    protected $fillable = [
        'page_name',
        'page_link',
        'service_id',
        'meta_title',
        'meta_key',
        'meta_description',
        'meta_image',
        'canonical',
        'meta_schema',
        'status',
    ];

}
