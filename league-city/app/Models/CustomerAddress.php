<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerAddress extends Model
{
    use HasFactory; 
    
    protected $table = 'customer_address'; 
    protected $primaryKey = "id";
    protected $fillable = [
        'customer_id',
        'name',
        'email',
        'contact',
        'house_no',
        'address',
        'landmark',
        'pincode',
        'city',
        'state',
        'country',
        'default_address',
        'status',
    ];
}
