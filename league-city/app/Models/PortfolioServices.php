<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioServices extends Model
{
    use HasFactory;

    protected $table = 'portfolio_services';
    protected $primaryKey = "id";

    protected $fillable = [
        'portfolio_id', 'service_icon', 'service_title', 'service_details', 'status'
    ];
}
