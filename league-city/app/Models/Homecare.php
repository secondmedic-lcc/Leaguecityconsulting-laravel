<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homecare extends Model
{
    use HasFactory;
    protected $table = "homecare_leads";
    protected $primaryKey = "id";
    protected $fillable = [
        'service_provider_id',
        'customer_id',
        'service',
        'name',
        'email',
        'contact',
        'message',
        'status',
        'service_charge',
        'service_status',
    ];
}
