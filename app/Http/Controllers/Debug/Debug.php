<?php

namespace App\Http\Controllers\Debug;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class Debug extends Controller
{
    public function index()
    {
        return Auth::user();
    }
}
