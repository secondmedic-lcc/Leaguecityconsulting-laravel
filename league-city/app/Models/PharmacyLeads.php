<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PharmacyLeads extends Model
{
    use HasFactory;
    protected $table = "pharmacy_leads";
    protected $primaryKey = "id";
    protected $fillable = [
        'service_provider_id',
        'customer_id',
        'first_name',
        'last_name',
        'email',
        'contact',
        'message',
        'status',
        'image',
        'user_address',
        'pincode',
    ];
}
