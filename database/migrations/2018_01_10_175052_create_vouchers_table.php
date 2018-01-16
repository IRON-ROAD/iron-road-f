<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vouchers', function (Blueprint $table) {
            $table->increments('id');
            $table->string("number");
            $table->string("date");
            $table->string("co6_number");
            $table->string("invoice_number");
            $table->string("invoice_date");
            $table->string("bill_date")->default("");
            $table->string("description");
            $table->unsignedInteger("status_id");
            $table->foreign("status_id")->references("id")->on("status")->onDelete("cascade");
            $table->unsignedInteger("payee_id");
            $table->foreign("payee_id")->references("id")->on("payees")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vouchers');
    }
}
