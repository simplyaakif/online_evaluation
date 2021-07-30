<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class AddPayLinkToBills extends Migration {

        public function up()
        {
            Schema::table('bills', function (Blueprint $table) {
                $table->text('pay_link')->nullable();
            });
        }

        public function down()
        {
            Schema::table('bills', function (Blueprint $table) {
                //
            });
        }
    }
