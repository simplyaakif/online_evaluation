<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpeakingsTable extends Migration
{
    public function up()
    {
        Schema::create('speakings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('speaking_question')->nullable();
            $table->string('marks')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
