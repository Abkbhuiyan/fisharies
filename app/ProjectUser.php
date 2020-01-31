<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectUser extends Model
{
    //

    public function users(){
       return $this->belongsTo(User::class,'user_id');
    }
    public function projects(){
       return $this->belongsTo(Project::class,'project_id');
    }
}
