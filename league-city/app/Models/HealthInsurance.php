<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthInsurance extends Model
{
    use HasFactory;
    
    protected $table = "health_insurance";
    protected $primaryKey = "id";

    protected $fillable = ['user_id', 'name', 'email', 'contact', 'pincode'];
}
