<?php

namespace App;

use App\Medicine;
use App\Tank;
use App\Project;
use Illuminate\Database\Eloquent\Model;

class MedicineTank extends Model
{
    public function tank(){
        return $this->belongsTo(Tank::class,'tank_id');
    }
    public function medicine(){
        return $this->belongsTo(Medicine::class,'medicine_id');
    }
    public function project(){
        return $this->belongsTo(Project::class,'project_id');
    }
}
