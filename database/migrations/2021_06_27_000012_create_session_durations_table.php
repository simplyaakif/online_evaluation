<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionDurationsTable extends Migration
{
    public function up()
    {
        Schema::create('session_durations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('session_duration')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
