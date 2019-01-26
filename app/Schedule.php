<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    //table name (optional)
    protected $table = 'schedules';
    
    //primary key (optional)
    public $primarykey = 'id';
}
