<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('schedule_1');
            $table->string('schedule_2');
            $table->string('schedule_3');
            $table->string('schedule_4');
            $table->string('schedule_5');
            $table->string('schedule_6');
            $table->string('schedule_7');
            $table->string('schedule_8');
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
        Schema::drop('schedules');
    }
}
