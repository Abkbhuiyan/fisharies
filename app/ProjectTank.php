<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectTank extends Model
{
    public function tank(){
        return $this->belongsTo(Tank::class,'tank_id');
    }
    public function project(){
        return $this->belongsTo(Project::class,'project_id');
    }
    public function fish(){
        return $this->belongsTo(Fish::class,'fish_id');
    }
    public function fishHealths(){
        return $this->hasMany(FishHealth::class);
    }
}
