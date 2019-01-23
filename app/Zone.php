<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Schedule;

class Zone extends Model
{
    public function valves()
    {
        return $this->belongsToMany('App\Valve');
    }
    
    
    public function schedule()
    {
        return $this->belongsTo('App\Schedule');
    }
}
