<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseSessionDurationPivotTable extends Migration
{
    public function up()
    {
        Schema::create('course_session_duration', function (Blueprint $table) {
            $table->unsignedBigInteger('course_id');
            $table->foreign('course_id', 'course_id_fk_4194259')->references('id')->on('courses')->onDelete('cascade');
            $table->unsignedBigInteger('session_duration_id');
            $table->foreign('session_duration_id', 'session_duration_id_fk_4194259')->references('id')->on('session_durations')->onDelete('cascade');
        });
    }
}
