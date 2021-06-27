<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListeningsTable extends Migration
{
    public function up()
    {
        Schema::create('listenings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('question')->nullable();
            $table->string('marks')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
