<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->date('schedule_date');
            $table->time('schedule_start');
            $table->time('schedule_end');
            $table->timestamps();


            $table->unsignedBigInteger('doctor_id');
            $table->index('doctor_id', 'schedule_doctor_idx');
            $table->foreign('doctor_id', 'schedule_doctor_fk')->on('doctors')->references('id')->onDelete('cascade');

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
        Schema::dropIfExists('schedules');
    }
}
