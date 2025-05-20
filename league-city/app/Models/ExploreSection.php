<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ExploreSection extends Model
{
    use HasFactory;
    protected $table = 'explore_sections';
    protected $primaryKey = 'id';

    protected $fillable = [
        'heading', 'description', 'button_text', 'button_url', 'position'
    ];
}
