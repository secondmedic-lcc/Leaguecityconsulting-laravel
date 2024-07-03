<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesIcons extends Model
{
    use HasFactory;
    protected $table = "services_icons";
    protected $primaryKey = "id";
    protected $fillable = [
        'services_id', 'name','icon','status'
    ];
}
