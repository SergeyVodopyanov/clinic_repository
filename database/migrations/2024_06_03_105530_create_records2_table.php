<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecords2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records2', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('patient_id')->nullable();
            $table->index('patient_id', 'record2_patient_idx');
            $table->foreign('patient_id', 'record2_patient_fk')->on('patients')->references('id')->onDelete('cascade');

            $table->unsignedBigInteger('speciality_id')->nullable();
            $table->index('speciality_id', 'record2_speciality_idx');
            $table->foreign('speciality_id', 'record2_speciality_fk')->on('specialities')->references('id')->onDelete('cascade');

            $table->unsignedBigInteger('doctor_id')->nullable();
            $table->index('doctor_id', 'record2_doctor_idx');
            $table->foreign('doctor_id', 'record2_doctor_fk')->on('doctors')->references('id')->onDelete('cascade');

            $table->unsignedBigInteger('service_id')->nullable();
            $table->index('service_id', 'record2_service_idx');
            $table->foreign('service_id', 'record2_service_fk')->on('services')->references('id')->onDelete('cascade');

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
        Schema::dropIfExists('records2');
    }
}
