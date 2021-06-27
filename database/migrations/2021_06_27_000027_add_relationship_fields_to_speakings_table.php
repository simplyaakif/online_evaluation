<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToSpeakingsTable extends Migration
{
    public function up()
    {
        Schema::table('speakings', function (Blueprint $table) {
            $table->unsignedBigInteger('evaluation_test_id')->nullable();
            $table->foreign('evaluation_test_id', 'evaluation_test_fk_4261133')->references('id')->on('evaluation_tests');
        });
    }
}
