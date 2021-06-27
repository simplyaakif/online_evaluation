<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseSessionStartDatePivotTable extends Migration
{
    public function up()
    {
        Schema::create('course_session_start_date', function (Blueprint $table) {
            $table->unsignedBigInteger('course_id');
            $table->foreign('course_id', 'course_id_fk_4194261')->references('id')->on('courses')->onDelete('cascade');
            $table->unsignedBigInteger('session_start_date_id');
            $table->foreign('session_start_date_id', 'session_start_date_id_fk_4194261')->references('id')->on('session_start_dates')->onDelete('cascade');
        });
    }
}
