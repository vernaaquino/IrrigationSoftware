<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\Schedule;

class Requirement extends Model
{
    //
   

    public function schedule()
    {
        return $this->belongsTo('App\Schedule');
    }
}
 