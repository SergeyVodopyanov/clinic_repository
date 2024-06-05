<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecords3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records3', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('record_date');

            $table->unsignedBigInteger('patient_id')->nullable();
            $table->index('patient_id', 'record3_patient_idx');
            $table->foreign('patient_id', 'record3_patient_fk')->on('patients')->references('id')->onDelete('cascade');

            $table->unsignedBigInteger('speciality_id')->nullable();
            $table->index('speciality_id', 'record3_speciality_idx');
            $table->foreign('speciality_id', 'record3_speciality_fk')->on('specialities')->references('id')->onDelete('cascade');

            $table->unsignedBigInteger('doctor_id')->nullable();
            $table->index('doctor_id', 'record3_doctor_idx');
            $table->foreign('doctor_id', 'record3_doctor_fk')->on('doctors')->references('id')->onDelete('cascade');

            $table->unsignedBigInteger('service_id')->nullable();
            $table->index('service_id', 'record3_service_idx');
            $table->foreign('service_id', 'record3_service_fk')->on('services')->references('id')->onDelete('cascade');

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
        Schema::dropIfExists('records3');
    }
}
