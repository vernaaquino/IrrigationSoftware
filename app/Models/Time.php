<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    public function requirement()
	{
		return $this->belongsTo('App\Models\Requirement');
	}
}
