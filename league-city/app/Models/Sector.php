<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sector extends Model
{
    use HasFactory;


    protected $table = 'sectors';

    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'subtitle',
        'slug',
        'image',
        'description',
        'button_text',
        'button_link',
        'status',
    ];
}
