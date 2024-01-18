<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabsTests extends Model
{
    use HasFactory;
    protected $table = "labs_tests_profile";
    protected $primaryKey = "id";
  
    protected $fillable = [
        'test_name',
        'test_image',
        'status',
    ];
}
