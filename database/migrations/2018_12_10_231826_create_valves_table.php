<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValvesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valves', function (Blueprint $table) {
            $table->increments('id');
            
            $table->float('flow_rate');
            
            $table->integer('direction'); // dictates whether valve is normally open or normally closed
            
            $table->integer('parent_id'); // valve parent
            
            $table->float('diameter'); //diameter of 'parent' pipe
            
            $table->float('pressure'); //water pressure in ___ units
            
            $table->string('metadata');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('valves');
    }
}
