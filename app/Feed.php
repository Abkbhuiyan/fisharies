<?php

namespace App;

use App\FeedTank;
use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    protected $fillable = [
        'name','price'
    ];

    public function feedTanks(){
        return $this->hasMany(FeedTank::class,'feed_id');
    }
}
