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
            $table->bigInteger('user_follow_id')->unsigned();
            $table->foreign('user_follow_id')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('user_followed_id')->unsigned();
            $table->foreign('user_followed_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('user_follow_status');
            $table->integer('user_action_id');
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
        Schema::dropIfExists('users_follow');
    }
}
