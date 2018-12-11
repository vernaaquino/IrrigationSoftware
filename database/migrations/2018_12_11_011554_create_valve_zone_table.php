<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//The valve_zone table maps valves to zones (many to many).
class CreateValveZoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valve_zone', function (Blueprint $table) {

            $table->integer('valve_id')->unsigned();
            $table->foreign('valve_id')->references('id')->on('valves');
            
            $table->integer('zone_id')->unsigned();
            $table->foreign('zone_id')->references('id')->on('zones');
            
            
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
        Schema::dropIfExists('valve_zone');
    }
}
