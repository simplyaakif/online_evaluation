<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionTimesTable extends Migration
{
    public function up()
    {
        Schema::create('session_times', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('time')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
