<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\User_About;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'min:8', 'max:100', 'unique:users', 'regex:/^[a-zA-Z0-9._a-zA-Z0-9]{1,}$/'],
            'password' => $this->passwordRules(),
        ])->validate();

        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'username' => $input['username'],
            'password' => Hash::make($input['password']),
        ]);

        $user->about_model()->create([
            'user_id' => Auth::id(),
            'date_of_birth',
            'contact_email',
            'phone_number',
            'gender',
            'status',
            'user_country',
            'user_state',
            'user_city,',
            'description',
            'favourite_music_genre, Genre',
            'favourite_books',
            'favourite_music',
            'favourite_shows',
            'favourite_games',
            'favourite_brands',
            'favourite_artists',
            'favourite_interests',
            'social_webpage',
            'social_facebook',
            'social_twitter',
            'social_youtube',
            'social_instagram',
            'social_linkedin',
            'social_other1',
            'social_other2',
            'education_title',
            'education_date_start',
            'education_date_end',
            'education_institute',
            'employment_title',
            'employment_date_start',
            'employment_date_end',
            'employment_company',
        ]);

        $user->assignRole('User');

        return $user;
    }
}
