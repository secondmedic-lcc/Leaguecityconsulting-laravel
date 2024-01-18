<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtpVerification extends Model
{
    use HasFactory;
    protected $table = "otp_verification";
    protected $primaryKey = "id";
    protected $fillable = [
        'user_id', 'user_email', 'user_contact', 'otp', 'otp_status'
    ];
}
