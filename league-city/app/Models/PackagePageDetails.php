<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackagePageDetails extends Model
{
    use HasFactory;

    protected $table = "package_page_details";
    protected $primaryKey = "id";

    protected $fillable = [
        'package_id',
        'main_heading',
        'sub_heading',
        'top_plan_title',
        'enterprise_title',
        'enterprise_details',
        'includes_heading',
        'includes_details',
        'bottom_plan_title',
        'banner_heading',
        'banner_sub_heading',
        'banner_details',
        'status',
    ];
}
