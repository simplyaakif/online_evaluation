<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToQuestionsTable extends Migration
{
    public function up()
    {
        Schema::table('questions', function (Blueprint $table) {
            $table->unsignedBigInteger('evaluation_test_id')->nullable();
            $table->foreign('evaluation_test_id', 'evaluation_test_fk_4260752')->references('id')->on('evaluation_tests');
        });
    }
}
