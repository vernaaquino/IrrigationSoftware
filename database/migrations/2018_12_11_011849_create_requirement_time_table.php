<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


//The requirement_time table maps requirements to times (many to many).
class CreateRequirementTimeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requirement_time', function (Blueprint $table) {
            $table->integer('requirement_id')->unsigned();
            $table->foreign('requirement_id')->references('id')->on('requirements');
            
            $table->integer('time_id')->unsigned();
            $table->foreign('time_id')->references('id')->on('times');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requirement_time');
    }
}
