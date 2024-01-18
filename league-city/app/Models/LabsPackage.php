<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabsPackage extends Model
{
    use HasFactory;
    protected $table = "labs_package";
    protected $primaryKey = "id";
  
    protected $fillable = [
        'lab_vendor_id',
        'package_category',
        'package_sub_category',
        'package_name',
        'package_short_description',
        'package_image',
        'package_description',
        'package_mrp',
        'package_price',
        'package_gst',
        'show_front',
        'status',
        'report_code',
    ];
}
