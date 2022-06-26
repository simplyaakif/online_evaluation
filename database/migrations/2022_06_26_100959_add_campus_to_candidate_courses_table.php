<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration {

        public function up()
        {
            Schema::table('candidate_courses', function (Blueprint $table) {
                $table->string('campus');
            });
        }

        public function down()
        {
            Schema::table('candidate_courses', function (Blueprint $table) {
                //
            });
        }
    };
