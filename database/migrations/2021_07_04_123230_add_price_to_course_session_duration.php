<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class AddPriceToCourseSessionDuration extends Migration {

        public function up()
        {
            Schema::table('course_session_duration', function (Blueprint $table) {
                $table->text('price')->nullable();
            });
        }

        public function down()
        {
            Schema::table('course_session_duration', function (Blueprint $table) {
                $table->dropColumn('price');
            });
        }
    }
