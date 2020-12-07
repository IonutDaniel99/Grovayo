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
            $table->integer('user_followed_id')->unsigned();
            $table->enum('user_follow_status', array('0', '1', '2', '3'));
            $table->integer('user_action_id')->unsigned();
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
