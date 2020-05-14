<?php

namespace App;
use App\MedicineTank;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{

    public function medicineTanks(){
        return $this->hasMany(MedicineTank::class,'medicine_id');
    }
}
