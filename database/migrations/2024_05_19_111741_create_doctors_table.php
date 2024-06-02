<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('doctor_surname');
            $table->string('doctor_name');
            $table->string('doctor_middlename')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('speciality_id');
            $table->index('speciality_id', 'doctor_speciality_idx');
            $table->foreign('speciality_id', 'doctor_speciality_fk')
                ->on('speciality')->references('id');

            $table->softDeletes();
        });
    }
    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}



