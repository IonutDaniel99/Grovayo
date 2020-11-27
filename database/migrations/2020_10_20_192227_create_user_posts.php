<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('author_id')->constrained()->references('id')->on('users')->onDelete('cascade');
            $table->string('post_title', 255);
            $table->text('post_content');
            $table->unsignedInteger('post_likes');
            $table->dateTime('post_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_posts');
    }
}
