<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePatientreportsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patientreports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patientId');
            $table->string('patientName');
            $table->string('patientAge');
            $table->string('patientSex');
            $table->string('imageCategory');
            $table->string('refBy');
            $table->text('patientHistory');
            $table->text('image');
            $table->text('dicomFile');
            $table->string('doctor');
            $table->dateTime('startTime');
            $table->dateTime('endTime');
            $table->string('type');
            $table->string('typingStatus');
            $table->string('status');
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
        Schema::drop('patientreports');
    }
}
