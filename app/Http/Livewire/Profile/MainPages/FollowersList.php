<?php

namespace App\Http\Livewire\Profile\MainPages;

use App\Models\User_Follow;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class FollowersList extends Component
{
    public function message()
    {
        dd("message");
    }
    public function followBack()
    {
        dd("follow");
    }
    public function deleteFollow($id)
    {
        User_Follow::where('user_follow_id', $id)->where('user_followed_id', Auth::id())->delete();
    }
    public function render()
    {
        $follow_model = User_Follow::with('user')->with('user_about')->where("user_followed_id", Auth::id())->get();
        $follower_list = [];
        foreach ($follow_model as $follow_data) {
            $is_a_friend_b = User_Follow::where('user_follow_id', $follow_data['user_follow_id'])->where('user_followed_id', Auth::id())->exists();
            $is_b_friend_a = User_Follow::where('user_follow_id', Auth::id())->where('user_followed_id', $follow_data['user_follow_id'])->exists();
            if ($is_a_friend_b == 1 && $is_b_friend_a == 1) {
                $is_friend = true;
            } else {
                $is_friend = false;
            }
            array_push($follower_list, [
                'follower_request_id' => $follow_data['user_follow_id'],
                'follower_request_username' => $follow_data->user->pluck('username')->first(),
                'follower_request_profile_photo' => $follow_data->user->pluck('profile_photo_path')->first(),
                'follower_request_name' => $follow_data->user->pluck('name')->first(),
                'follower_request_location' => $follow_data->user_about->pluck('user_country')->first(),
                'follower_request_isFriend' => $is_friend
            ]);
        }
        return view('livewire.profile.main-pages.followers-list', ['follower_list' => $follower_list]);
    }
}
