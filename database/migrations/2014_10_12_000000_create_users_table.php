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
            $table->string('name');
            $table->string('username', 100)->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('live_in', 255)->nullable();
            $table->text('profile_photo_path')->nullable();
            $table->string("background_image_url")->nullable()->default('storage/background-photos/default.jpg');
            $table->boolean('is_active')->default(true);
            $table->boolean('is_private')->default(false);
            $table->boolean('is_blocked')->default(false);
            $table->string('user_secret_code')->nullable();
            $table->string('fb_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
