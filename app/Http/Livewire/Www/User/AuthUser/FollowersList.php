<?php

namespace App\Http\Livewire\Www\User\AuthUser;

use App\Models\Country;
use App\Models\State;
use Livewire\Component;
use App\Models\User_Follow;
use Illuminate\Support\Facades\Auth;

class FollowersList extends Component
{
    public function message()
    {
        dd("message");
    }
    public function deleteFollow($id)
    {
        User_Follow::where('user_follow_id', $id)->where('user_followed_id', Auth::id())->delete();
    }
    public function render()
    {
        $follow_model = User_Follow::where("user_followed_id", Auth::id())->where('user_follow_status', 2)->get();
        $follower_list = [];
        if ($follow_model->isEmpty()) {
            return view('livewire.www.user.auth-user.followers-list', ['is_follower_list_empty' => true]);
        } else {
            $is_follower_list_empty = false;
        }

        foreach ($follow_model as $follow_data) {
            $country_id = $follow_data->user_about_following->pluck('user_country')->first();
            $state_id = $follow_data->user_about_following->pluck('user_state')->first();
            array_push($follower_list, [
                'follower_request_id' => $follow_data['user_follow_id'],
                'follower_request_name' => $follow_data->user_following->pluck('name')->first(),
                'follower_request_username' => $follow_data->user_follow->pluck('username')->first(),
                'follower_request_profile_photo' => $follow_data->user_follow->pluck('profile_photo_path')->first(),
                'follower_request_background_photo' => $follow_data->user_follow->pluck('background_image_url')->first(),
                'follower_request_country' => Country::where('id', $country_id)->value('name'),
                'follower_request_state' => State::where('id', $state_id)->value('name')
            ]);
        }
        return view('livewire.www.user.auth-user.followers-list', compact('follower_list', 'is_follower_list_empty'));
    }
}
