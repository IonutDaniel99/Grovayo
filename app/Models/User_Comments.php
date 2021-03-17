<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Comments extends Model
{
    use HasFactory;

    protected $table = 'user_comments';

    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    public function post()
    {
        return $this->belongsTo('App\Models\User_Posts', 'post_id', 'id');
    }
}
