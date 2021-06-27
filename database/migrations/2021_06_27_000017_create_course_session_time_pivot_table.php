<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseSessionTimePivotTable extends Migration
{
    public function up()
    {
        Schema::create('course_session_time', function (Blueprint $table) {
            $table->unsignedBigInteger('course_id');
            $table->foreign('course_id', 'course_id_fk_4194260')->references('id')->on('courses')->onDelete('cascade');
            $table->unsignedBigInteger('session_time_id');
            $table->foreign('session_time_id', 'session_time_id_fk_4194260')->references('id')->on('session_times')->onDelete('cascade');
        });
    }
}
