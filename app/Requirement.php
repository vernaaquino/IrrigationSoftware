<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    public function time()
	{
		return $this->hasOne('App\Time');
	}
}
