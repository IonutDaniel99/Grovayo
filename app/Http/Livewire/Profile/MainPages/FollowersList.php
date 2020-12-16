<?php

namespace App\Http\Livewire\Profile\MainPages;

use App\Models\User_Follow;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class FollowersList extends Component
{

    public $state = 'Follow Back';
    public function message()
    {
        dd("message");
    }
    public function followBack($id)
    {
        User_Follow::where('user_follow_id', $id)->where('user_followed_id', Auth::id())->insert([
            'user_follow_id' => Auth::id(),
            'user_followed_id' => $id,
            'user_follow_status' => 1,
            'user_action_id' => Auth::id()
        ]);
        $this->state = "Pending";
    }
    public function deleteFollow($id)
    {
        User_Follow::where('user_follow_id', $id)->where('user_followed_id', Auth::id())->delete();
    }
    public function render()
    {
        $follow_model = User_Follow::with('user')->with('user_about')->where("user_followed_id", Auth::id())->get();
        $follower_list = [];

        if ($follow_model->isEmpty()) {
            return view('livewire.profile.main-pages.followers-list', ['is_follower_list_empty' => true]);
        } else {
            $is_follower_list_empty = false;
        }

        foreach ($follow_model as $follow_data) {
            $is_a_to_b = User_follow::where('user_followed_id', Auth::id())->where('user_follow_id', $follow_data['user_follow_id'])->get();
            $is_user_friend_follower = !$is_a_to_b->isEmpty();
            $is_b_to_a = User_follow::where('user_follow_id', Auth::id())->where('user_followed_id', $follow_data['user_follow_id'])->get();
            $is_follower_friend_user = !$is_b_to_a->isEmpty();
            $they_are_friends = ($is_user_friend_follower && $is_follower_friend_user) ? 1 : 0;
            if ($is_b_to_a->pluck('user_follow_status')->first() == 0) {
                $this->state = "Follow Back";
            } elseif ($is_b_to_a->pluck('user_follow_status')->first() == 1) {
                $this->state = "Pending";
            }
            array_push($follower_list, [
                'follower_request_id' => $follow_data['user_follow_id'],
                'follower_request_username' => $follow_data->user->pluck('username')->first(),
                'follower_request_profile_photo' => $follow_data->user->pluck('profile_photo_path')->first(),
                'follower_request_background_photo' => $follow_data->user->pluck('background_image_url')->first(),
                'follower_request_name' => $follow_data->user->pluck('name')->first(),
                'follower_request_location' => $follow_data->user_about->pluck('user_country')->first(),
                'follower_request_Friends' => $they_are_friends,
                'follower_request_status' => $this->state,
            ]);
        }
        return view('livewire.profile.main-pages.followers-list', compact('follower_list', 'is_follower_list_empty'));
    }
}
