<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageTypes extends Model
{
    use HasFactory;

    protected $table = "package_types";
    protected $primaryKey = "id";
    protected $fillable = [
        'package_name',
        'package_slug',
        'status',
    ];
}
