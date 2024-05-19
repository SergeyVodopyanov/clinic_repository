<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->integer('patient_medcardnumber');
            $table->string('patient_surname');
            $table->string('patient_name');
            $table->string('patient_middlename')->nullable();
            $table->date('patient_dateofbirth');
            $table->string('patient_gender');
            $table->string('patient_phonenumber');
            $table->string('patient_email');
            $table->timestamps();

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
        Schema::dropIfExists('patients');
    }
}
