<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;
    
    protected $table = "campaign";
    protected $primaryKey = "id";
    protected $fillable = [
        'name',
        'email',
        'contact',
        'country',
        'campaign_for',
        'message',
        'request_status',
        'remark',
        'status',
    ];
}
