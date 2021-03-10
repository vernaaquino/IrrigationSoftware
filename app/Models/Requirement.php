<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    public function time()
	{
		return $this->hasOne('App\Models\Time');
	}
	
    public function schedule()
    {
        return $this->belongsTo('App\Models\Schedule');
    }
}
