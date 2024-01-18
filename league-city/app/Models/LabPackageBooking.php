<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabPackageBooking extends Model
{
    use HasFactory;

    protected $table = 'lab_package_booking';
    protected $primaryKey = "id";
    protected $fillable = [
        'service_provider_id',
        'package_id',
        'lab_id',
        'customer_id',
        'name',
        'email',
        'contact',
        'age',
        'booking_for',
        'gender',
        'user_address',
        'slot_time',
        'package_mrp',
        'package_price',
        'package_gst',
        'booking_date',
        'status',
        'pincode',
    ];
}
