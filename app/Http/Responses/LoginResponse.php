<?php

namespace App\Http\Responses;

use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Controller;
use App\Models\User_About;
use Illuminate\Support\Facades\Auth;

class LoginResponse extends Controller
{

    public function toResponse()
    {
        $user_location = new ApiController();
        if (Auth::user()->hasRole("User")) {
            User_About::where('user_id', Auth::id())->update([
                'live_in' => $user_location->returnUserLocation()
            ]);
            return redirect(route('Home'));
        }
        return redirect(route('Admin_Dashboard_Index'));
    }

    public function toWelcome()
    {
        if (Auth::check()) {
            return redirect(route('Home'));
        }
        return redirect(route("login"));
    }
}
