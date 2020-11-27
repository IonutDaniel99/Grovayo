<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersConversation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_conversation', function (Blueprint $table) {
            $table->foreignId('user_sender_id')->constrained()->references('id')->on('users');
            $table->unsignedInteger('user_reciver_id');
            $table->dateTime('conversation_created_at');
            $table->string('conversation_path', 255)->default('/messages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_conversation');
    }
}
