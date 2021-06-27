<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration
{
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('amount')->nullable();
            $table->date('due_date')->nullable();
            $table->string('status')->nullable();
            $table->date('paid_on')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
