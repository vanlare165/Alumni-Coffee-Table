<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGraduatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graduates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('MiddleName');
            $table->string('TelNum');
            $table->string('Address');
            $table->string('MobileNo');
            $table->date('BirthDate');
            $table->string('CivilStat');
            $table->string('Age');
            $table->string('Gender');
            $table->string('Religion');
            $table->string('Citizenship');
            $table->string('EmailAdd');
            $table->string('GraduatedLvl');
            $table->string('Course');
            $table->string('YearGrad');
            $table->string('Company');
            $table->string('CompanyAdd');
            $table->string('ComPosition');

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
        Schema::drop('graduates');
    }
}
