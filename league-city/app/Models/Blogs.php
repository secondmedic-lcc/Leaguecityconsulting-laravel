<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;

    protected $table = 'blogs';
    protected $primaryKey = "id";
    protected $fillable = [
        'blog_title',
        'blog_details',
        'description',
        'read_time',
        'blog_image',
        'detail_image',
        'status',
    ];
}
