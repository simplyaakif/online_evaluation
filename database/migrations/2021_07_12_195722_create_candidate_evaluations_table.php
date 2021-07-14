<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateCandidateEvaluationsTable extends Migration {

        public function up()
        {
            Schema::create('candidate_evaluations', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->integer('user_id');
                $table->integer('candidate_course_id');
                $table->json('candidate_evaluation_input');
                $table->text('candidate_evaluation_score');
                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('candidate_evaluations');
        }
    }
