<?php

namespace App;

use App\Feed;
use App\Tank;
use App\Project;
use Illuminate\Database\Eloquent\Model;

class FeedTank extends Model
{

    public function feed(){
        return $this->belongsTo(Feed::class,'feed_id');
    }
    public function tank(){
        return $this->belongsTo(Tank::class,'tank_id');
    }
    public function project(){
        return $this->belongsTo(Project::class,'project_id');
    }

}
