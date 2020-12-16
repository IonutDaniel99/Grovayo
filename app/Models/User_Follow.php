<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Follow extends Model
{
    use HasFactory;

    protected $table = 'users_follow';


    public function user()
    {
        return $this->hasMany('App\Models\User', 'id', 'user_follow_id');
    }
    public function user_about()
    {
        return $this->hasMany('App\Models\User_About', 'user_id', 'user_follow_id');
    }
}
