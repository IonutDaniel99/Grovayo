<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\User_About;
use App\Models\User_Notification_Settings;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $userNumber = 250;
        for ($i = 1; $i < $userNumber; $i++) {
            $secret_string = Str::random(20);
            $user = User::create([
                'name' => $faker->name,
                'username' => $faker->userName,
                'email' => $faker->email,
                'live_in' => collect(['Pitesti', 'Actual Location'])->random(),
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'user_secret_code' => $secret_string

            ]);
            $secret_code = User::where('user_secret_code', $secret_string)->value('id');
            $user->about_model()->create([
                'user_id' => $secret_code,
                'user_weather_degree' => collect(['F', 'C', 'K'])->random(),
                'time_zone' => $faker->timezone,
                'birthday' => $faker->date('Y-m-d', now()),
                'gender' => collect(['Male', 'Female', 'Unspecified', 'Other'])->random(),
                'status' => collect(['Single', 'Married', 'In a relationship', 'Engaged', 'Its complicated', 'Widowed', 'Not specified'])->random(),
                'contact_email' => $faker->email,
                'phone_number' => $faker->phoneNumber,
                'about' => $faker->text,
                'user_country' => collect([22, 44])->random(),
                'user_state' => collect([731, 440])->random(),
                'user_city' => NULL,
                'favourite_music_genre' => $faker->text(25),
                'favourite_books' => $faker->text(25),
                'favourite_music' => $faker->text(25),
                'favourite_movies' => $faker->text(25),
                'favourite_games' => $faker->text(25),
                'favourite_brands' => $faker->text(25),
                'favourite_artists' => $faker->text(25),
                'favourite_interests' => $faker->text(25),
                'education_title' => $faker->jobTitle,
                'education_date_start' => $faker->date('m-d'),
                'education_date_end' => collect([$faker->date('m-d', now()), 'Present'])->random(),
                'education_institute' => $faker->company,
                'employment_title' => $faker->jobTitle,
                'employment_date_start' => $faker->date('m-d'),
                'employment_date_end' => collect([$faker->date('m-d', now()), 'Present'])->random(),
                'employment_company' => $faker->company,
            ]);

            $user->follower()->create([
                'user_follow_id' => $secret_code,
                'user_followed_id' => rand(2, $userNumber),
                'user_follow_status' => rand(0, 3),
                'user_action_id' => $secret_code
            ]);

            $user->notifications()->create([
                'user_id' => $secret_code
            ]);

            $user->assignRole('User');
        }
    }
}
