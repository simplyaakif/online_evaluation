<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class AddCourseIdToBills extends Migration {

        public function up()
        {
            Schema::table('bills', function (Blueprint $table) {
                $table->integer('course_id')->nullable();
                $table->integer('candidate_course_id')->nullable();
            });
        }

        public function down()
        {
            Schema::table('bills', function (Blueprint $table) {
                //
            });
        }
    }
