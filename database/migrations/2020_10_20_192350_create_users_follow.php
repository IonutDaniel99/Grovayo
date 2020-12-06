<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersFollow extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_follow', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_follow_id')->constrained()->references('id')->on('users');
            $table->unsignedInteger('user_followed_id');
            $table->enum('user_follow_status', array('0', '1', '2', '3'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_follow');
    }
}
