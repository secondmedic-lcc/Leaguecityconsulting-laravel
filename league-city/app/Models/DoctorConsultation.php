<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorConsultation extends Model
{
    use HasFactory;

    protected $table = "doctor_consult_leads";
    protected $primaryKey = "id";

    protected $fillable = [
        'customer_id',
        'service_provider_id',
        'doctor_id',
        'meeting_room_id',
        'name',
        'gender',
        'email',
        'contact',
        'dob',
        'message',
        'state',
        'consultation_price',
        'consultation_type',
        'status',
    ];
}
