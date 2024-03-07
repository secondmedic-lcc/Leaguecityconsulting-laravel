<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageRequest extends Model
{
    use HasFactory;

    protected $table = 'package_request';
    protected $primaryKey = "id";

    protected $fillable = [
        'package',
        'plan',
        'name',
        'mobile',
        'email',
        'location',
        'about',
        'status',
    ];

}
