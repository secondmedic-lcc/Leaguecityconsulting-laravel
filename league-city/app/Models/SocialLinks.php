<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SocialLinks extends Model
{
    use HasFactory;

    protected $table = 'social_links';
    protected $fillable = ['facebook_url', 'twitter_url', 'linkedin_url', 'instagram_url', 'pinterest_url'];
}
