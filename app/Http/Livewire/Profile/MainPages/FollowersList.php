<?php

namespace App\Http\Livewire\Profile\MainPages;

use App\Models\User;
use App\Models\User_Follow;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class FollowersList extends Component
{

    public $state;
    public function message()
    {
        dd("message");
    }
    public function followBack($username)
    {
        $auth_user_id = Auth::id();
        $username_id = User::where("username", $username);
        $a_to_b = User_Follow::where("user_follow_id", $auth_user_id)->where('user_followed_id', $username_id->pluck('id')->first());
        $b_to_a = User_Follow::where("user_followed_id", $auth_user_id)->where('user_follow_id', $username_id->pluck('id')->first());

        if ($a_to_b->exists()) {
            if ($b_to_a->where('user_follow_status', 1)) {
                $b_to_a->update([
                    'user_follow_status' => 2,
                    'user_action_id' => $auth_user_id
                ]);
                return;
            };
            if ($username_id->pluck('is_private')->first() == 1 && $a_to_b->where('user_follow_status', 0)) {
                $a_to_b->update([
                    'user_follow_status' => 1,
                    'user_action_id' => $auth_user_id
                ]);
            } else {
                $a_to_b->update([
                    'user_follow_status' => 2,
                    'user_action_id' => $auth_user_id
                ]);
            }
        } else {
            if ($username_id->pluck('is_private')->first() == 1 && $a_to_b->where('user_follow_status', 0)) {
                User_Follow::insert([
                    "user_follow_id" => $auth_user_id,
                    'user_followed_id' => $username_id->pluck('id')->first(),
                    'user_follow_status' => 1,
                    'user_action_id' => $auth_user_id
                ]);
            } else {
                User_Follow::insert([
                    "user_follow_id" => $auth_user_id,
                    'user_followed_id' => $username_id->pluck('id')->first(),
                    'user_follow_status' => 2,
                    'user_action_id' => $auth_user_id
                ]);
            }
        }
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
            $is_user_friend_follower = !$is_a_to_b->where('user_follow_status', 2)->isEmpty();
            $is_b_to_a = User_follow::where('user_follow_id', Auth::id())->where('user_followed_id', $follow_data['user_follow_id'])->get();
            $is_follower_friend_user = !$is_b_to_a->where('user_follow_status', 2)->isEmpty();
            $they_are_friends = ($is_user_friend_follower && $is_follower_friend_user) ? 1 : 0;
            if ($is_b_to_a->pluck('user_follow_status')->first() == 0) {
                $this->state = "Follow Back";
            } elseif ($is_b_to_a->pluck('user_follow_status')->first() == 1) {
                $this->state = "Pending";
            } elseif ($is_b_to_a->pluck('user_follow_status')->first() == 2) {
                $this->state = "Accept";
            } else {
                $they_are_friends = true;
            }
            array_push($follower_list, [
                'follower_request_id' => $follow_data['user_follow_id'],
                'follower_request_username' => $follow_data->user->pluck('username')->first(),
                'follower_request_profile_photo' => $follow_data->user->pluck('profile_photo_path')->first(),
                'follower_request_background_photo' => $follow_data->user->pluck('background_image_url')->first(),
                'follower_request_name' => $follow_data->user->pluck('name')->first(),
                'follower_request_location' => $follow_data->user_about->pluck('user_country')->first(),
                'follower_request_status' => $this->state,
            ]);
        }
        return view('livewire.profile.main-pages.followers-list', compact('they_are_friends', 'follower_list', 'is_follower_list_empty'));
    }
}
