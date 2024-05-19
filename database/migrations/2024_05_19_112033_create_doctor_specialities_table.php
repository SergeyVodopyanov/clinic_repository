<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorSpecialitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_specialities', function (Blueprint $table) {
            $table->id();
            $table->timestamps();


            $table->unsignedBigInteger('doctor_id');
            $table->unsignedBigInteger('speciality_id');

            //IDX
            $table->index('doctor_id', 'doctor_speciality_doctor_idx');
            $table->index('speciality_id', 'doctor_speciality_speciality_idx');
            //FK
            $table->foreign('doctor_id', 'doctor_speciality_doctor_fk')->on('doctors')->references('id');
            $table->foreign('speciality_id', 'doctor_speciality_speciality_fk')->on('specialities')->references('id');

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
        Schema::dropIfExists('doctor_specialities');
    }
}
