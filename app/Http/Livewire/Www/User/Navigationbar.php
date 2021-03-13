<?php

namespace App\Http\Livewire\Www\User;

use App\Models\User_Follow;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navigationbar extends Component
{
    /**
     * Function to accept user following request.
     * @param id $username_id User id from User Table.
     */
    public function accept($username_id)
    {
        $auth_id = Auth::id();
        $follow_model = User_Follow::where("user_followed_id", $auth_id)->where('user_follow_id', $username_id);
        $follow_model->update([
            'user_follow_status' => 2,
            'user_action_id' => $auth_id,
            'updated_at' => now()

        ]);
    }
    /**
     * Function to decline user following request.
     * @param id $username_id User id from User Table.
     */
    public function decline($username_id)
    {
        $auth_id = Auth::id();
        $follow_model = User_Follow::where("user_followed_id", $auth_id)->where('user_follow_id', $username_id);
        $follow_model->update([
            'user_follow_status' => 0,
            'user_action_id' => $auth_id,
            'updated_at' => now()

        ]);
    }
    public function render()
    {
        $friends_request = [];
        if (Auth::user()->is_private == 0) {
            $latest_friends = [];
            $follow_model_approved = User_Follow::with('user_follow')->where("user_followed_id", Auth::id())->where('user_follow_status', 2)->orderBy('id')->take(3)->get();
            foreach ($follow_model_approved as $follow_data_approved) {
                array_push($latest_friends, [
                    'follower_request_id' => $follow_data_approved['user_follow_id'],
                    'follower_request_username' => $follow_data_approved->user_follow->pluck('username')->first(),
                    'follower_request_profile_photo' => $follow_data_approved->user_follow->pluck('profile_photo_path')->first(),
                    'follower_request_name' => $follow_data_approved->user_follow->pluck('name')->first(),
                    'follower_request_date' => $follow_data_approved['created_at']
                ]);
            }
        } else {
            $latest_friends = NULL;
        }
        $follow_model_pending = User_Follow::with('user_follow')->where("user_followed_id", Auth::id())->where('user_follow_status', 1)->get();
        foreach ($follow_model_pending as $follow_data_pending) {
            array_push($friends_request, [
                'follower_request_id' => $follow_data_pending['user_follow_id'],
                'follower_request_username' => $follow_data_pending->user_follow->pluck('username')->first(),
                'follower_request_profile_photo' => $follow_data_pending->user_follow->pluck('profile_photo_path')->first(),
                'follower_request_name' => $follow_data_pending->user_follow->pluck('name')->first(),
                'follower_request_date' => $follow_data_pending['created_at']
            ]);
        }

        return view('livewire.www.user.navigationbar', compact('friends_request', 'latest_friends'));
    }
}
