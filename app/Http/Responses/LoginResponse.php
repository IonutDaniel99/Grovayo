<?php

namespace App\Http\Responses;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
}
