<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    public function projectsUser(){
        return $this->hasMany(ProjectUser::class,'project_id');
    }
    public function projectTank(){
        return $this->hasMany(ProjectUser::class,'tank_id');
    }
}
