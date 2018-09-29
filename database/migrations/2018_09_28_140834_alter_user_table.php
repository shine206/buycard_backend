<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('status')->default(true);
            $table->string("phone")->nullable();
            $table->string("id_number")->nullable();
            $table->string("avatar")->nullable();
            $table->string("address")->nullable();
            $table->unsignedInteger("balance")->default(0);
            $table->string("username");
            $table->string("account_number")->nullable();
            $table->string("account_name")->nullable();
            $table->string("account_bank_name")->nullable();
            $table->string("account_bank_branch")->nullable();
            $table->string("account_bank_address")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
