<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesImages extends Model
{
    use HasFactory;
    protected $table = "services_images";
    protected $primaryKey = "id";
    protected $fillable = [
        'services_id', 'heading','project_url', 'description', 'image', 'status'
    ];
}
