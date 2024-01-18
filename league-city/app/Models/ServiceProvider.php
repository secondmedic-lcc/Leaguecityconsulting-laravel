<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceProvider extends Model
{
    use HasFactory;
    protected $table = "service_provider";
    protected $primaryKey = "id";
    protected $fillable = [
        'business_id', 'partner_type', 'business_name', 'registration_no', 'pancard_no', 'shop_name', 'owner_name', 'owner_contact', 'owner_email', 'user_name', 'user_contact', 'user_email', 'user_whatsapp', 'shop_address', 'shop_location', 'city', 'state', 'country', 'pincode', 'latitude', 'longitude', 'shop_image', 'agreement_status', 'alternate_contact', 'user_password', 'pharmacy_commission', 'lab_commission', 'homecare_commission', 'consult_commission'
    ];
}
