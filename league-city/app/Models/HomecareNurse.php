<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomecareNurse extends Model
{
    use HasFactory;
    protected $table = "homecare_nurse";
    protected $primaryKey = "id";
    protected $fillable = [
        'nurse_id',
        'user_name',
        'user_contact',
        'user_email',
        'user_password',
        'user_date',
        'user_time',
        'user_status',
        'user_type',
        'user_alt_contact',
        'user_city',
        'user_state',
        'user_country',
        'user_pincode',
        'user_address',
        'user_gender',
        'user_dob',
        'user_image',
        'user_age',
        'user_recover_code',
        'user_approve',
        'registration_number',
        'status',
    ];
}
