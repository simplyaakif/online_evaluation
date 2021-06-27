<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluationTestsTable extends Migration
{
    public function up()
    {
        Schema::create('evaluation_tests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->string('limit_mcq')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
