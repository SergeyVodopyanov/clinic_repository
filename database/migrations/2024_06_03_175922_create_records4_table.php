<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecords4Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records4', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('record_date');
            $table->time('record_time');

            $table->unsignedBigInteger('patient_id')->nullable();
            $table->index('patient_id', 'record4_patient_idx');
            $table->foreign('patient_id', 'record4_patient_fk')->on('patients')->references('id');

            $table->unsignedBigInteger('speciality_id')->nullable();
            $table->index('speciality_id', 'record4_speciality_idx');
            $table->foreign('speciality_id', 'record4_speciality_fk')->on('specialities')->references('id');

            $table->unsignedBigInteger('doctor_id')->nullable();
            $table->index('doctor_id', 'record4_doctor_idx');
            $table->foreign('doctor_id', 'record4_doctor_fk')->on('doctors')->references('id');

            $table->unsignedBigInteger('service_id')->nullable();
            $table->index('service_id', 'record4_service_idx');
            $table->foreign('service_id', 'record4_service_fk')->on('services')->references('id');

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
        Schema::dropIfExists('records4');
    }
}
