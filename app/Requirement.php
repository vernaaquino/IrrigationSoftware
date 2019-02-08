<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    public function time()
	{
		return $this->hasOne('App\Time');
	}
	
	    public function schedule()
    {
        return $this->belongsTo('App\Schedule');
    }
}
