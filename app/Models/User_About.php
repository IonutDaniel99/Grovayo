<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class User_About extends Model
{
    use HasFactory;

    protected $table = 'user_about';

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'user_weather_degree',
        'time_zone',
        'birthday',
        'gender',
        'status',
        'contact_email',
        'phone_number',
        'about',
        'user_country',
        'user_state',
        'user_city',
        'favourite_music_genre',
        'favourite_books',
        'favourite_music',
        'favourite_movies',
        'favourite_games',
        'favourite_brands',
        'favourite_artists',
        'favourite_interests',
        'education_title',
        'education_date_start',
        'education_date_end',
        'education_institute',
        'employment_title',
        'employment_date_start',
        'employment_date_end',
        'employment_company',
    ];
}
