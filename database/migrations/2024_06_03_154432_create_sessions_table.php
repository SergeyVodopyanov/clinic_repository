<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->id();
            $table->time('session_start');
            $table->time('session_end');
            $table->boolean('session_isBusy');

            $table->unsignedBigInteger('schedule_id');
            $table->index('schedule_id', 'session_schedule_idx');
            $table->foreign('schedule_id', 'session_schedule_fk')->on('schedules')->references('id');

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
        Schema::dropIfExists('sessions');
    }
}
