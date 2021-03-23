<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Posts extends Model
{
    use HasFactory;

    protected $table = 'user_posts';

    public function comments()
    {
        return $this->hasMany('App\Models\User_Comments', 'post_id', 'id');
    }

    public function likes()
    {
        return $this->hasMany('App\Models\Likes', 'post_id', 'id');
    }
}
