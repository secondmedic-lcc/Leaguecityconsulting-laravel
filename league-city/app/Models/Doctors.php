<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    use HasFactory;
    protected $table = "doctors";
    protected $primaryKey = "id";
    protected $fillable = [
        'user_title', 'user_name', 'user_gender', 'user_email', 'user_contact',
        'user_alt_contact', 'user_dob', 'user_age', 'user_password', 'current_status',
        'user_address', 'user_pincode', 'user_country', 'user_state', 'user_city', 'doctor_id',
        'registration_number', 'user_image', 'user_signature','user_date','user_time', 'user_recover_code','user_approve'
    ];
}
