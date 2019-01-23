<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Zone;

class Schedule extends Model
{
    //table name (optional)
    protected $table = 'schedules';
    
    //primary key (optional)
    public $primarykey = 'id';
    
    
    public function zones()
    {
        return $this->hasMany('App\Zone');
    }
}
