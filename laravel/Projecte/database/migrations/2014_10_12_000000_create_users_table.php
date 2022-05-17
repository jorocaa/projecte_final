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
            $table->string('name')->nullable();
            $table->string('surnames')->nullable();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('location')->nullable();
            $table->string('email')->unique();
            $table->integer('salary')->nullable();
            $table->string('dni')->unique()->nullable();
            $table->string('iban')->unique()->nullable();
            $table->string('nuss')->unique()->nullable();
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
