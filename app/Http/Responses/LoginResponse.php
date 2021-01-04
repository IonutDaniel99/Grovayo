<?php

namespace App\Http\Responses;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginResponse extends Controller
{

    public function toResponse()
    {
        if (!Auth::user()->hasRole("User")) {
            return redirect(route('Admin_Dashboard_Index'));
        }
        return redirect(route('Home'));
    }

    public function toWelcome()
    {
        if (Auth::check()) {
            return redirect(route('Home'));
        }
        return redirect(route("login"));
    }
}
