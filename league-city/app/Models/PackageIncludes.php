<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageIncludes extends Model
{
    use HasFactory;

    protected $table = "package_includes";
    protected $primaryKey = "id";
    protected $fillable = [
        'package_for',
        'title',
        'includes_image',
        'description',
    ];
}
