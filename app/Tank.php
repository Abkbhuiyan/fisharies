<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tank extends Model
{
    //
    public function projectTank(){
        return $this->hasMany(ProjectTank::class,'tank_id');
    }
}
