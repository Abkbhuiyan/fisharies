<?php

namespace App;

use app\ProjectTank;
use app\FeedTank;
use app\Medicine;
use Illuminate\Database\Eloquent\Model;

class Tank extends Model
{
    //
    public function projectTank(){
        return $this->hasMany(ProjectTank::class,'tank_id');
    }
    public function feedTanks(){
        return $this->hasMany(FeedTank::class,'tank_id');
    }
    public function medicineTanks(){
        return $this->hasMany(MedicineTank::class,'tank_id');
    }

}
