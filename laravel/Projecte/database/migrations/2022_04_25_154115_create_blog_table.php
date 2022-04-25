<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idclient')->references('id')->on('users')->nullable();
            $table->foreignId('idmoderator')->references('id')->on('users')->nullable();
            $table->foreignId('idcomment')->references('id')->on('comment')->nullable();
            $table->string('title');
            $table->string('category')->nullable();
            $table->string('content');
            $table->string('wikipedia')->nullable();
            $table->foreignId('idimage')->references('id')->on('image')->nullable();
            $table->float('latitude')->nullable();
            $table->float('longitude')->nullable();
            $table->foreignId('idreservation')->references('id')->on('reservation')->nullable();
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
        Schema::dropIfExists('blog');
    }
}
