<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabSubTests extends Model
{
    use HasFactory;
    protected $table = "lab_sub_tests";
    protected $primaryKey = "id";
  
    protected $fillable = [
        'labs_tests_id',
        'sub_tests_name',
        'status',
    ];
}
