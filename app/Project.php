<?php

namespace App;

use App\ProjectUser;
use App\ProjectTank;
use App\SalesHistory;
use App\FeedTank;
use App\MedicineTank;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    public function projectsUser(){
        return $this->hasMany(ProjectUser::class,'project_id');
    }
    public function projectTank(){
        return $this->hasMany(ProjectTank::class,'project_id');
    }
    public function sellHistories(){
        return $this->hasMany(SellHistory::class,'project_id');
    }
    public function feedTanks(){
        return $this->hasMany(FeedTank::class,'project_id');
    }
    public function medicineTanks(){
        return $this->hasMany(MedicineTank::class,'project_id');
    }
}
