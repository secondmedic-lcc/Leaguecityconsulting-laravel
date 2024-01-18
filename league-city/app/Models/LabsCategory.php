<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabsCategory extends Model
{
    use HasFactory;
    protected $table = "labs_category";
    protected $primaryKey = "id";
    protected $fillable = [
        'category_name', 'category_detail','category_image','category_parent','status'
    ];
}
