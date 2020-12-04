<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_view', function (Blueprint $table) {
            $table->integer('visitor_user_id')->constrained()->references('id')->on('users')->onDelete('cascade');
            $table->integer('profile_user_id')->constrained()->references('id')->on('users')->onDelete('cascade');
            $table->datetime("visitor_time");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_view');
    }
}
