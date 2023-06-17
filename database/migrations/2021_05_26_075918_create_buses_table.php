<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buses', function (Blueprint $table) {
            $table->engine = 'InnoDB';
           $table->bigIncrements('id')->unsigned();;
            $table->string('Bus_name');
             $table->string('Bus_model');
            $table->integer('Bus_number');
            $table->string('Bus_status');
            $table->integer('Total_seat');
            $table->bigInteger('station_id')->unsigned();
            $table->bigInteger('driver_id')->unsigned();
            $table->bigInteger('conductor_id')->unsigned();
            $table->timestamps();
            $table->foreign('station_id')->references('id')->on('stations')->onDelete('cascade');
            $table->foreign('driver_id')->references('id')->on('drivers')->onDelete('cascade');
            $table->foreign('conductor_id')->references('id')->on('conductors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buses');
    }
}
