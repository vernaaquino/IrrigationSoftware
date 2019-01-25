<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\Requirement;
class Schedule extends Model
{
    //table name (optional)
   // protected $table = 'schedules';
    
    //primary key (optional)
    public $primarykey = 'id';

    public function requirements()
    {
        return $this->hasMany('App\Requirement');
    }
}
