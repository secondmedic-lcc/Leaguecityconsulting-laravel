<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    use HasFactory;

    protected $table = "packages";
    protected $primaryKey = "id";
    protected $fillable = [
        'package_for',
        'name',
        'url_slug',
        'heading',
        'monthly_inr',
        'monthly_usd',
        'yearly_inr',
        'yearly_usd',
        'description',
        'status',
    ];
}
