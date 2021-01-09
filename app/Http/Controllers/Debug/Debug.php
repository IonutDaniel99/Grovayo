<?php

namespace App\Http\Controllers\Debug;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Country;
use App\Models\State;
use App\Models\User;


class Debug extends Controller
{
    public function index()
    {
        $peopleAroundYourCurrentLocation = [];
        $allAroundCurrentLocation = User::where('live_in', Auth::user()->live_in)
            ->whereDoesntHave('follower')
            ->where('id', '!=', Auth::id())
            ->where('name', '!=', 'Admin')
            ->get(['id', 'name', 'live_in', 'profile_photo_path', 'background_image_url']);
        foreach ($allAroundCurrentLocation as $user) {
            array_push($peopleAroundYourCurrentLocation, $user);
        }


        $peopleAroundYourSetStateLocation = [];
        $allAroundSetStateLocation = User::whereDoesntHave('follower')
            ->whereHas('about_model', function ($q) {
                $q->where('user_state', auth()->user()->about_model->user_state);
            })
            ->where('id', '!=', Auth::id())
            ->where('name', '!=', 'Admin')->with('about_model')
            ->get(['id', 'name', 'profile_photo_path', 'background_image_url']);
        foreach ($allAroundSetStateLocation as $user) {
            $user['about_model']['user_state'] = State::where('id', $user['about_model']['user_state'])->value('name');
            $user['about_model']['user_country'] = Country::where('id', $user['about_model']['user_country'])->value('name');
            array_push($peopleAroundYourSetStateLocation, $user);
        }

        $peopleAroundYourSetCountryLocation = [];
        $allAroundSetCountryLocation = User::whereDoesntHave('follower')
            ->whereHas('about_model', function ($q) {
                $q->where('user_country', auth()->user()->about_model->user_country)
                    ->where('user_state', '!=', auth()->user()->about_model->user_state);
            })
            ->where('id', '!=', Auth::id())->where('name', '!=', 'Admin')->with('about_model')
            ->get(['id', 'name', 'live_in', 'profile_photo_path', 'background_image_url']);
        foreach ($allAroundSetCountryLocation as $user) {
            $user['about_model']['user_state'] = State::where('id', $user['about_model']['user_state'])->value('name');
            $user['about_model']['user_country'] = Country::where('id', $user['about_model']['user_country'])->value('name');
            array_push($peopleAroundYourSetCountryLocation, $user);
        }


        $allAroundWorld = [];
        $randomPeople = User::where('live_in', '!=', Auth::user()->live_in)->orWhereNull('live_in')
            ->whereDoesntHave('follower')
            ->whereHas('about_model', function ($q) {
                $q->where('user_country', '!=', auth()->user()->about_model->user_country)->orWhereNull('user_country')
                    ->where('user_state', '!=', auth()->user()->about_model->user_state)->orWhereNull('user_state');
            })
            ->where('id', '!=', Auth::id())->where('name', '!=', 'Admin')
            ->get(['id', 'name', 'live_in', 'profile_photo_path', 'background_image_url']);
        foreach ($randomPeople as $user) {
            $user['about_model']['user_state'] = State::where('id', $user['about_model']['user_state'])->value('name');
            $user['about_model']['user_country'] = Country::where('id', $user['about_model']['user_country'])->value('name');
            array_push($allAroundWorld, $user);
        }

        $people = array_merge(
            $peopleAroundYourCurrentLocation,
            $peopleAroundYourSetStateLocation,
            $peopleAroundYourSetCountryLocation,
            $allAroundWorld
        );

        return $people;
    }
}
