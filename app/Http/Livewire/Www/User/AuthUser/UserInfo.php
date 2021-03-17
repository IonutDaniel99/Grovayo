<?php

namespace App\Http\Livewire\Www\User\AuthUser;

use App\Models\City;
use App\Models\Country;
use App\Models\State;
use App\Models\User;
use App\Models\User_Follow;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserInfo extends Component
{
    public $user_about;

    public function render()
    {

        $profile = User::where('id', Auth::id())->with('about_model', 'posts', 'follower')->first();
        $this->user_about = $profile->about_model->where('user_id', Auth::id())->first();
        $this->user_about['posts_number'] = $profile->posts->count();
        $this->user_about['followed_number'] = $profile->follower->where('user_followed_id', Auth::id())->count();
        $this->user_about['following_number'] = User_Follow::where('user_follow_id', Auth::id())->count();
        $this->user_about['user_country'] = Country::where("id", $this->user_about['user_country'])->value('name');
        $this->user_about['user_state'] = State::where("id", $this->user_about['user_state'])->value('name');
        $this->user_about['user_city'] = City::where("id", $this->user_about['user_city'])->value('name');
        return view('livewire.www.user.auth-user.user-info', ['user_about' => $this->user_about, 'profile' => $profile]);
    }
}
