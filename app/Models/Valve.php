<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Valve extends Model
{
    public function zones()
    {
        return $this->belongsToMany('App\Models\Zone');
    }
}
