<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBreachTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('breach', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('title');
            $table->string('description');
            $table->foreignId('idclient')->references('id')->on('users');
            $table->foreignId('idmoderator')->references('id')->on('users');
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
        Schema::dropIfExists('breach');
    }
}
