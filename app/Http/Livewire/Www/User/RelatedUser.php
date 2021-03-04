<?php

namespace App\Http\Livewire\Www\User;

use Livewire\Component;
use App\Models\Country;
use App\Models\State;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RelatedUser extends Component
{
    public function render()
    {

        $user_state = State::where('id', Auth::user()->about_model->user_state)->value('name');
        $user_country = Country::where('id', Auth::user()->about_model->user_country)->value('name');

        $peopleAroundYourCurrentLocation = [];
        $allAroundCurrentLocation = User::where('live_in', Auth::user()->live_in)->take(6)
            ->whereDoesntHave('follower')
            ->where('id', '!=', Auth::id())
            ->whereHas('roles', function ($q) {
                $q->where('name', "User");
            })->whereHas('notifications', function ($q) {
                $q->where('hide_profile', 0);
            })
            ->get(['id', 'name', 'username', 'live_in', 'profile_photo_path', 'background_image_url']);
        foreach ($allAroundCurrentLocation as $user) {
            array_push($peopleAroundYourCurrentLocation, $user);
        }


        $peopleAroundYourSetStateLocation = [];
        $allAroundSetStateLocation = User::whereDoesntHave('follower')
            ->whereHas('about_model', function ($q) {
                $q->where('user_state', auth()->user()->about_model->user_state);
            })
            ->where('id', '!=', Auth::id())
            ->whereHas('roles', function ($q) {
                $q->where('name', "User");
            })->with('about_model')
            ->get(['id', 'name', 'username', 'profile_photo_path', 'background_image_url']);
        foreach ($allAroundSetStateLocation as $user) {
            $user['about_model']['user_state'] = State::where('id', $user['about_model']['user_state'])->value('name');
            $user['about_model']['user_country'] = Country::where('id', $user['about_model']['user_country'])->value('name');
            array_push($peopleAroundYourSetStateLocation, $user);
        }


        $peopleAroundYourSetCountryLocation = [];
        $allAroundSetCountryLocation = User::whereDoesntHave('follower')->where('live_in', '!=', Auth::user()->live_in)
            ->whereHas('about_model', function ($q) {
                $q->where('user_country', auth()->user()->about_model->user_country)
                    ->where('user_state', '!=', auth()->user()->about_model->user_state);
            })->whereHas('roles', function ($q) {
                $q->where('name', "User");
            })
            ->where('id', '!=', Auth::id())->where('name', '!=', 'Admin')->with('about_model')
            ->get(['id', 'username', 'name', 'live_in', 'profile_photo_path', 'background_image_url']);
        foreach ($allAroundSetCountryLocation as $user) {
            $user['about_model']['user_state'] = State::where('id', $user['about_model']['user_state'])->value('name');
            $user['about_model']['user_country'] = Country::where('id', $user['about_model']['user_country'])->value('name');
            array_push($peopleAroundYourSetCountryLocation, $user);
        }


        $allAroundWorld = [];
        $randomPeople = User::where('live_in', '!=', Auth::user()->live_in)->where('live_in', '!=', 'Actual Location')
            ->whereDoesntHave('follower')
            ->whereHas('roles', function ($q) {
                $q->where('name', "User");
            })
            ->whereHas('about_model', function ($q) {
                $q->where('user_country', '!=', auth()->user()->about_model->user_country)->orWhereNull('user_country')
                    ->where('user_state', '!=', auth()->user()->about_model->user_state)->orWhereNull('user_state');
            })
            ->where('id', '!=', Auth::id())->with('about_model')
            ->get(['id', 'name', 'username', 'live_in', 'profile_photo_path', 'background_image_url']);
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
        );;
        return view('livewire.www.user.related-user', compact('people', 'user_country', 'user_state'));
    }
}
