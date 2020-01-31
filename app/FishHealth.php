<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FishHealth extends Model
{
    public  function projectTank(){
        return $this->belongsTo(ProjectTank::class,'project_tank_id');
    }
}
