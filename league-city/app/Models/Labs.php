<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Labs extends Model
{
    use HasFactory;
    protected $table = "labs";
    protected $primaryKey = "id";
    protected $fillable = [
        'lab_name',
        'lab_route_name',
        'lab_logo',
        'lab_content',
        'lab_qms',
        'show_front',
        'location_config',
        'sort_order',
        'status',
    ];
}
