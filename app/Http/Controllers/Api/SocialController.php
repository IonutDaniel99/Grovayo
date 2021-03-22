<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use Illuminate\Support\Str;

class SocialController extends Controller
{
    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->fields([
            'name', 'email', 'birthday', 'location'
        ])->scopes([
            'email', 'user_birthday', 'user_location'
        ])->redirect();
    }

    public function loginWithFacebook()
    {
        try {

            $user = Socialite::driver('facebook')->fields([
                'name', 'email', 'birthday', 'location'
            ])->user();
            $isUser = User::where('email', $user->email)->first();
            if ($isUser) {
                Auth::login($isUser);
                return redirect('/');
            } else {
                $secret_string = Str::random(20);
                $createUser = User::create([
                    'name' => $user->name,
                    'username' => strtolower(str_replace(' ', '_', $user->name)),
                    'email' => $user->email,
                    'email_verified_at' => now(),
                    'password' => encrypt('password'),
                    'live_in' => replace_spec_char($user->user['location']['name']),
                    'fb_id' => $user->id,
                    'user_secret_code' => $secret_string
                ]);
                $createUser->assignRole('User');
                $secret_code = User::where('user_secret_code', $secret_string)->value('id');
                $faker = \Faker\Factory::create();

                $createUser->about_model()->create([
                    'user_id' => $secret_code,
                    'user_weather_degree' => collect(['F', 'C', 'K'])->random(),
                    'time_zone' => $faker->timezone,
                    'gender' => 'Unspecified',
                    'status' => 'Not specified',
                    'birthday' => date('Y-m-d', strtotime($user->user['birthday'])),
                ]);


                Auth::login($createUser);
                return redirect('/');
            }
        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }


    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function loginWithGoogle()
    {
        try {
            $user = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect('/login');
        }
        $existingUser = User::where('email', $user->email)->first();
        if ($existingUser) {
            Auth::login($existingUser, true);
        } else {
            $secret_string = Str::random(20);
            $createUser = User::create([
                'name' => $user->user['name'],
                'username' => strtolower(strtok($user->user['email'], "@")),
                'email' => $user->user['email'],
                'email_verified_at' => now(),
                'password' => encrypt('password'),
                'google_id' => $user->user['id'],
                'user_secret_code' => $secret_string
            ]);
            $createUser->assignRole('User');
            $secret_code = User::where('user_secret_code', $secret_string)->value('id');
            $faker = \Faker\Factory::create();

            $createUser->about_model()->create([
                'user_id' => $secret_code,
                'user_weather_degree' => collect(['F', 'C', 'K'])->random(),
                'time_zone' => $faker->timezone,
                'gender' => 'Unspecified',
                'status' => 'Not specified',
            ]);
            Auth::login($createUser, true);
        }
        return redirect()->to('/');
    }
}
