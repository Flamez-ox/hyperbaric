<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePortfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'client', 'title',
        'description', 'project_url'
    ];


    public function images() {
        
        return $this->hasMany(HomePortfolioImage::class, 'portfolio_id', 'id');
    }

    // public function image() {
        
    //     return $this->hasOne(HomePortfolioImage::class, 'portfolio_id');
    // }
}
