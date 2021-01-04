<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserNotificationSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_notification_settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->references('id')->on('users')->onDelete('cascade');
            // Email Settings
            $table->boolean('email_follow')->default(false);
            $table->boolean('email_like')->default(false);
            $table->boolean('email_comment')->default(false);
            // User Settings
            $table->boolean('email_update')->default(false);
            $table->boolean('email_marketing')->default(false);
            $table->boolean('hide_profile')->default(false);
            $table->boolean('hide_ads')->default(false);
            $table->boolean('hide_alerts')->default(false);
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
        Schema::dropIfExists('user_notification_settings');
    }
}
