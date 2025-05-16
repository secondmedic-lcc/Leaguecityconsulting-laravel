<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Technology extends Model
{
    use HasFactory;

    protected $table = 'technologies';
    protected $primaryKey = 'id';

    protected $fillable = ['title', 'slug', 'image', 'features', 'order', 'status'];
    protected $casts = [
        'features' => 'array'
    ];
}
