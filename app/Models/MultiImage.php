<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultiImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'img_name',
        'portfolio_id'
    ];


    // public function portfolio() {

    //     return $this->belongsTo(HomePortfolio::class, 'portfolio_id');
    // }


   
}
