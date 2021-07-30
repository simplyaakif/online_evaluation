<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class AddBillUrlToBills extends Migration {

        public function up()
        {
            Schema::table('bills', function (Blueprint $table) {
                $table->text('bill_url')->nullable();
                $table->text('pay_id')->nullable();
            });
        }

        public function down()
        {
            Schema::table('bills', function (Blueprint $table) {
                //
            });
        }
    }
