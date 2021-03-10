<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    public function valves()
    {
        return $this->belongsToMany('App\Models\Valve');
    }
    
    public function schedule()
    {
        return $this->belongsTo('App\Models\Schedule');
    }
}
