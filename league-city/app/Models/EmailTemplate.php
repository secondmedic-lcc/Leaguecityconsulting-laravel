<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailTemplate extends Model
{
    use HasFactory;

    protected $table = 'email_template';
    protected $primaryKey = "id";
    protected $fillable = [
        'module_id',
        'template_name',
        'subject',
        'title',
        'content',
        'status',
    ];
}
