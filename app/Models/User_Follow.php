<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Follow extends Model
{
    use HasFactory;

    public function follow()
    {
        return $this->hasMany('App\User');
    }
}
