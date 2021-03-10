<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Schedule extends Model
{
    use HasFactory;

    //table name (optional)
    protected $table = 'schedules';
    
    //primary key (optional)
    public $primarykey = 'id';
    
    
    public function zones()
    {
        return $this->hasMany('App\Models\Zone');
    }
    
}
