<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GrowthMetric extends Model
{
    use HasFactory;

    protected $table = 'growth_metrics';

    protected $primaryKey = 'id';
    protected $fillable = [
        'icon_class',
        'title',
        'description',
        'status',
    ];
}
