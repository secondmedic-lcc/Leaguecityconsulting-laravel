<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageKeyPoint extends Model
{
    use HasFactory;

    protected $table = "package_key_point";
    protected $primaryKey = "id";
    protected $fillable = [
        'package_id',
        'key_point',
        'includes',
        'status',
    ];
}
