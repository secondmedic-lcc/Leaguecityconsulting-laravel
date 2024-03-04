<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageSubKeyPoint extends Model
{
    use HasFactory;

    protected $table = "package_sub_keypoints";
    protected $primaryKey = "id";
    protected $fillable = [
        'package_id',
        'keypoint_id',
        'sub_keypoint',
        'includes',
        'status',
    ];
}
