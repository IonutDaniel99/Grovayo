<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'full_name',
        'birthday',
        'email',
        'phone_number',
        'gender',
        'status',
        'country',
        'state',
        'city',
        'description',
        'favourite_music_genre',
        'favourite_books',
        'favourite_movies',
        'favourite_shows',
        'favourite_games',
        'favourite_brands',
        'favourite_artist',
        'favourite_interest',
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
