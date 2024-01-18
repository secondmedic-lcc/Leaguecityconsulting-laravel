<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabsTestsAllotments extends Model
{
    use HasFactory;
    protected $table = "labs_tests_allotments";
    protected $primaryKey = "id";
  
    protected $fillable = [
        'labs_package_id',
        'labs_tests_id',
        'status',
    ];
}
