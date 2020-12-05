<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile_View extends Model
{
    use HasFactory;
    protected $table = 'profile_view';

    protected $fillable = [
        'profile_user_id',
        'visitor_user_id',
        'visitor_time'
    ];
}
