<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    public function requirement()
	{
		return $this->belongsTo('App\Time');
	}
}
