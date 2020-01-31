<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fish extends Model
{
    protected $fillable = [
        'name','description'
    ];

    public function projectTank(){
        return $this->hasMany(ProjectTank::class,'fish_id');
    }
}
