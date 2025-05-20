<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProcessWeFollow extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'order',
        'status'
    ];
    protected $table = 'process_we_follows';
    protected $primaryKey = 'id';
}
