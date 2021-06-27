<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionStartDatesTable extends Migration
{
    public function up()
    {
        Schema::create('session_start_dates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('start_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
