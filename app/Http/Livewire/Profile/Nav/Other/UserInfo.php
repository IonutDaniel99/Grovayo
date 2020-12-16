<?php

namespace App\Http\Livewire\Profile\Nav\Other;

use App\Models\City;
use App\Models\Country;
use App\Models\State;
use App\Models\User;
use App\Models\User_About;
use App\Models\User_Follow;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserInfo extends Component
{

    public $user_about;

    public function render()
    {
        $profile = User::all()->where('id', Auth::id())->first();
        $this->user_about = User_About::all()->where('user_id', Auth::id())->first();
        $this->user_about['follow_number'] = User_Follow::where('user_followed_id', Auth::id())->count();
        $this->user_about['following_number'] = User_Follow::where('user_follow_id', Auth::id())->count();
        $this->user_about['user_country'] = Country::where("id", $this->user_about['user_country'])->value('name');
        $this->user_about['user_state'] = State::where("id", $this->user_about['user_state'])->value('name');
        $this->user_about['user_city'] = City::where("id", $this->user_about['user_city'])->value('name');

        return view('livewire.profile.nav.other.user-info', ['user_about' => $this->user_about, 'profile' => $profile]);
    }
}
