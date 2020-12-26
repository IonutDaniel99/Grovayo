<?php

namespace App\Http\Controllers\Debug;

use App\Http\Controllers\Controller;
use App\Models\User;

class Debug extends Controller
{
    public function index()
    {
        $all_users_with_all_their_roles = User::with('roles')->get();
        return $all_users_with_all_their_roles;
    }
}
