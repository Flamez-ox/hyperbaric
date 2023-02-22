<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeTeam extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'team_image',
        'name',
        'facebook_url',
        'twitter_url',
        'instagram_url',
        'linkind_url'
        
        
    ];
}
