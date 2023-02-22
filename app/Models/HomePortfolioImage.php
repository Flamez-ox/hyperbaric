<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePortfolioImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'url', 'portfolio_id'
    ];

    public function portfolio() {

        return $this->belongsTo(HomePortfolio::class);
    }

}
