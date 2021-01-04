<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Notification_Settings extends Model
{
    use HasFactory;

    protected $table = 'user_notification_settings';

    protected $fillable = [
        'user_id',

    ];
}
