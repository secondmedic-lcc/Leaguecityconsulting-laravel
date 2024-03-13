<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PotfolioImage extends Model
{
    use HasFactory;

    protected $table = "portfolio_images";
    protected $primaryKey = "id";
    protected $fillable = [
        'portfolio_id', 'heading', 'description', 'image', 'status', 'portfolio_url',
    ];
}
