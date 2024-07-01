<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesDetails extends Model
{
    use HasFactory;
    protected $table = 'services_details';
    protected $primaryKey = "id";

    protected $fillable = [
        'services_id', 'service_icon', 'service_title', 'service_details', 'status'
    ];
}
