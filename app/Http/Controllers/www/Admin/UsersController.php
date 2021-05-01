<?php

namespace App\Http\Controllers\www\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;

class UsersController extends Controller
{
    public function index()
    {
        return view("www.admin.users");
    }
}
