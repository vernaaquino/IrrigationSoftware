<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Valve extends Model
{
    public function zones()
    {
        return $this->belongsToMany('App\Zone');
    }
    
}
