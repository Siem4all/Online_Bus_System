<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->engine = 'InnoDB';
             $table->bigIncrements('id')->unsigned();
            $table->bigInteger('passenger_id')->unsigned();
           $table->bigInteger('schedule_id')->unsigned();
            $table->string('status');
            $table->timestamps();
            $table->foreign('passenger_id')->references('id')->on('passengers')->onDelete('cascade');
             $table->foreign('schedule_id')->references('id')->on('schedules')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
