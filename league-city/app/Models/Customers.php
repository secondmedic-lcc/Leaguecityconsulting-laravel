<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    protected $table = "customers";
    protected $primaryKey = "id";
    protected $fillable = [
        'dob', 'name', 'contact', 'profile_image', 'gender', 'email', 'password', 'current_status', 'status'
    ];
}