<?php

namespace App\Http\Livewire\Profile\MainPages;

use App\Models\User_Follow;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class FollowingList extends Component
{
    public function message()
    {
        dd("message");
    }
    public function deleteFollow($id)
    {
        User_Follow::where('user_follow_id', Auth::id())->where('user_followed_id', $id)->delete();
    }
    public function render()
    {
        $follow_model = User_Follow::where("user_follow_id", Auth::id())->where('user_follow_status', 2)->get();
        $following_list = [];
        if ($follow_model->isEmpty()) {
            return view('livewire.profile.main-pages.following-list', ['is_following_list_empty' => true]);
        } else {
            $is_following_list_empty = false;
        }

        foreach ($follow_model as $follow_data) {
            array_push($following_list, [
                'follower_request_id' => $follow_data['user_followed_id'],
                'follower_request_username' => $follow_data->user_following->pluck('username')->first(),
                'follower_request_profile_photo' => $follow_data->user_following->pluck('profile_photo_path')->first(),
                'follower_request_background_photo' => $follow_data->user_following->pluck('background_image_url')->first(),
                'follower_request_name' => $follow_data->user_following->pluck('name')->first(),
                'follower_request_location' => $follow_data->user_about_following->pluck('user_country')->first(),
            ]);
        }
        return view('livewire.profile.main-pages.following-list', compact('following_list', 'is_following_list_empty'));
    }
}
