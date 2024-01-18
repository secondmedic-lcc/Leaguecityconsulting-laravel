<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agents extends Model
{
    use HasFactory;
    protected $table = "agents";
    protected $primaryKey = "id";
    protected $fillable = [
        'agent_name', 'agent_contact','agent_email','status'
    ];
}
