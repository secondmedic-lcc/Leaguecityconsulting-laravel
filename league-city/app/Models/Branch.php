<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Branch extends Model
{
    use HasFactory;
    protected $table = 'branches';
    protected $primaryKey = 'id';

    protected $fillable = ['branch_name', 'branch_address', 'branch_image', 'status'];
}
