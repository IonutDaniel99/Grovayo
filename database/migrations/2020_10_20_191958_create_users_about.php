<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersAbout extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_about', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('user_id')->constrained()->references('id')->on('users')->onDelete('cascade');
            $table->string('live_in', 255)->nullable()->default('Actual Location');
            $table->enum('user_weather_degree', array('F', 'C', 'K'))->default('F');
            $table->string('time_zone')->default('US/Hawaii');
            $table->date('birthday')->format('Y-m-d')->nullable();
            $table->enum('gender', array('Male', 'Female', 'Unspecified', 'Other'));
            $table->string('status')->default('Not Specified');
            $table->string('contact_email', 255)->nullable();
            $table->string('phone_number', 25)->nullable();
            $table->text('about')->nullable()->default('About Me');
            $table->string('user_country', 255)->nullable();
            $table->string('user_state', 255)->nullable();
            $table->string('user_city', 255)->nullable();
            $table->string('favourite_music_genre', 255)->nullable()->default('Music Genre');
            $table->string('favourite_books', 255)->nullable()->default('Books');
            $table->string('favourite_music', 255)->nullable()->default('Music');
            $table->string('favourite_movies', 255)->nullable()->default('Movies');
            $table->string('favourite_games', 255)->nullable()->default('Games');
            $table->string('favourite_brands', 255)->nullable()->default('Brands');
            $table->string('favourite_artists', 255)->nullable()->default('Artists');
            $table->string('favourite_interests', 255)->nullable()->default('Interests');
            $table->string('social_webpage', 255)->nullable();
            $table->string('social_facebook', 255)->nullable();
            $table->string('social_twitter', 255)->nullable();
            $table->string('social_youtube', 255)->nullable();
            $table->string('social_instagram', 255)->nullable();
            $table->string('social_linkedin', 255)->nullable();
            $table->string('social_other1', 255)->nullable();
            $table->string('social_other2', 255)->nullable();
            $table->text('education_title')->nullable();
            $table->string('education_date_start', 255)->nullable();
            $table->string('education_date_end', 255)->nullable();
            $table->string('education_institute', 255)->nullable();
            $table->text('employment_title')->nullable();
            $table->string('employment_date_start', 255)->nullable();
            $table->string('employment_date_end', 255)->nullable();
            $table->string('employment_company', 255)->nullable();
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
        Schema::dropIfExists('user_about');
    }
}
