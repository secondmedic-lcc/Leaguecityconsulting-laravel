<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactRequest extends Model
{
    use HasFactory;
    protected $table = "contact_request";
    protected $primaryKey = "id";
    protected $fillable = [
        'name',
        'email',
        'contact',
        'budget',
        'message',
        'status',
    ];
}
