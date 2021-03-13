<?php

namespace App\Http\Responses;

use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginResponse extends Controller
{
    /**
     * Function to redirect if its a user or admin.
     * If its user. It will grab his live location and update User Table.
     */
    public function toResponse()
    {
        $user_location = new ApiController();
        if (Auth::user()->hasRole("User")) {
            User::where('id', Auth::id())->update([
                'live_in' => $user_location->returnUserLocation()
            ]);
            return redirect(route('Home'));
        }
        return redirect(route('Admin_Dashboard_Index'));
    }
    /**
     * Redirect user to webpage if its logged or not.
     */
    public function toWelcome()
    {
        if (Auth::check()) {
            return redirect(route('Home'));
        }
        return redirect(route("login"));
    }
}
