<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorDetails extends Model
{
    use HasFactory;
    protected $table = "doctor_details";
    protected $primaryKey = "id";
    protected $fillable = [
        'doctor_id',
        'qualification',
        'experience',
        'language',
        'available_from',
        'available_to',
        'status',
    ];
}
