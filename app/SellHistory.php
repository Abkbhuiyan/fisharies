<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SellHistory extends Model
{
    public function project(){
        return $this->belongsTo(Project::class,'project_id');
    }
}
