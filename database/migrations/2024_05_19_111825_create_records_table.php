<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->string('record_service');
            $table->dateTime('record_datetime');
            $table->timestamps();

            $table->unsignedBigInteger('doctor_id');
            $table->index('doctor_id', 'record_doctor_idx');
            $table->foreign('doctor_id', 'record_doctor_fk')->on('doctors')->references('id');

            $table->unsignedBigInteger('patient_id');
            $table->index('patient_id', 'record_patient_idx');
            $table->foreign('patient_id', 'record_patient_fk')->on('patients')->references('id');

            $table->unsignedBigInteger('speciality_id');
            $table->index('speciality_id', 'record_speciality_idx');
            $table->foreign('speciality_id', 'record_speciality_fk')->on('specialities')->references('id');

            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('records');
    }
}
