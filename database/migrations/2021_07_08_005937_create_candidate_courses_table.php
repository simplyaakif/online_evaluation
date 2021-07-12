<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateCandidateCoursesTable extends Migration {

        public function up()
        {
            Schema::create('candidate_courses', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('course_name')->nullable();
                $table->string('course_duration')->nullable();
                $table->string('course_time')->nullable();
                $table->string('course_start_date')->nullable();
                $table->string('course_mode')->nullable();
                $table->string('course_price')->nullable();
                $table->integer('user_id');


                //

                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('candidate_courses');
        }
    }
