<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->bigInteger('bus_id')->unsigned();
            $table->bigInteger('route_id')->unsigned();
            $table->date('Departure_date');
            $table->time('Arrival_time');
            $table->time('Departure_time');
            $table->timestamps();
             $table->foreign('bus_id')->references('id')->on('buses')->onDelete('cascade');
             $table->foreign('route_id')->references('id')->on('routes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
