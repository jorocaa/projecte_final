<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('usertype');
            $table->string('name');
            $table->string('surnames');
            $table->string('username');
            $table->string('password');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('email')->unique();
            $table->integer('salary');
            $table->stirng('dni');
            $table->stirng('iban');
            $table->string('nuss');
            $table->integer('postsquantity');
            $table->timestamps();
            //$table->timestamp('email_verified_at')->nullable();
            //$table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
