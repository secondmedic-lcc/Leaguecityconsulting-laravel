<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InnovativeService extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'icon',
        'description',
        'link',
        'status'
    ];
    protected $table = 'innovative_services';
    protected $primaryKey = 'id';
}
