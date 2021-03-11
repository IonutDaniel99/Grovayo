<?php

namespace App\Http\Livewire\Www\User\ViewUser;

use App\Models\Country;
use App\Models\State;
use Livewire\Component;
use App\Models\User;
use App\Models\User_Follow;

class FollowersContent extends Component
{
    public $username;
    public $is_private = 0;
    protected $listeners = ['setContentPrivate' => 'setContentVisibility'];
    public function setContentVisibility()
    {
        $this->is_private = 1;
    }

    public function render()
    {
        $user_model = User::where("username", $this->username);
        $username_id = $user_model->pluck('id')->first();
        $follow_model = User_Follow::where("user_followed_id", $username_id)->where('user_follow_status', 2)->get();

        $follower_list = [];
        if ($follow_model->isEmpty()) {
            return view('livewire.www.user.view-user.followers-content', ['is_follower_list_empty' => true]);
        } else {
            $is_follower_list_empty = false;
        }

        if ($user_model->pluck('is_private')->first() == 1 && $follow_model->pluck('user_follow_status')->first() != 2) {
            $this->is_private = 1;
        } else {
            $this->is_private = 0;
        }

        foreach ($follow_model as $follow_data) {
            $country_id = $follow_data->user_about_following->pluck('user_country')->first();
            $state_id = $follow_data->user_about_following->pluck('user_state')->first();
            array_push($follower_list, [
                'follower_request_id' => $follow_data['user_follow_id'],
                'follower_request_name' => $follow_data->user_follow->pluck('name')->first(),
                'follower_request_username' => $follow_data->user_follow->pluck('username')->first(),
                'follower_request_profile_photo' => $follow_data->user_follow->pluck('profile_photo_path')->first(),
                'follower_request_background_photo' => $follow_data->user_follow->pluck('background_image_url')->first(),
                'follower_request_country' => Country::where('id', $country_id)->value('name'),
                'follower_request_state' => State::where('id', $state_id)->value('name')
            ]);
        }
        return view('livewire.www.user.view-user.followers-content', compact('follower_list', 'is_follower_list_empty'));
    }
}
