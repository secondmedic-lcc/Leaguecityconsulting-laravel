<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Services extends Model
{
    use HasFactory;
    protected $table = 'services';
    protected $primaryKey = "id";

    protected $fillable = [
        'name',
        'url_slug',
        'heading',
        'sub_heading',
        'min_description',
        'image',
        'desc_heading',
        'description',
        'banner_heading',
        'banner_sub_heading',
        'banner_details',
        'status'
    ];
}
