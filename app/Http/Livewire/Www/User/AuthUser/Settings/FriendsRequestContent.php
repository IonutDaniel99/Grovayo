<?php

namespace App\Http\Livewire\Www\User\AuthUser\Settings;

use App\Models\User_Follow;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class FriendsRequestContent extends Component
{
    public function accept($username_id)
    {
        $auth_id = Auth::id();
        $follow_model = User_Follow::where("user_followed_id", $auth_id)->where('user_follow_id', $username_id);
        $follow_model->update([
            'user_follow_status' => 2,
            'user_action_id' => $auth_id,
        ]);
    }
    public function decline($username_id)
    {
        $auth_id = Auth::id();
        $follow_model = User_Follow::where("user_followed_id", $auth_id)->where('user_follow_id', $username_id);
        $follow_model->update([
            'user_follow_status' => 0,
            'user_action_id' => $auth_id,
        ]);
    }

    public function render()
    {
        $auth_id = Auth::id();
        $follow_model = User_Follow::with('user_follow')->where("user_followed_id", $auth_id)->where('user_follow_status', 1)->get();
        $friends_request = [];
        foreach ($follow_model as $follow_data) {
            array_push($friends_request, [
                'follower_request_id' => $follow_data['user_follow_id'],
                'follower_request_username' => $follow_data->user_follow->pluck('username')->first(),
                'follower_request_profile_photo' => $follow_data->user_follow->pluck('profile_photo_path')->first(),
                'follower_request_name' => $follow_data->user_follow->pluck('name')->first(),
            ]);
        }
        return view('livewire.www.user.auth-user.settings.friends-request-content', ['friends_request' => $friends_request]);
    }
}
