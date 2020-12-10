<?php

namespace App\Http\Livewire\UserProfile\Nav;

use App\Models\User;
use App\Models\User_About;
use App\Models\User_Follow;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserProfileInfo extends Component
{

    public $username;
    public $state = false;

    public function mount($username)
    {
        $this->username = $username;
    }

    public function toggle_follow_state()
    {
        $user_model = User::where("username", $this->username);
        $username_id = $user_model->select('id')->first();
        $follow_model = User_Follow::where("user_follow_id", Auth::id())->where('user_followed_id', $username_id);

        if ($follow_model->exists()) {
            if ($follow_model->select('user_follow_status')->first() == 1) {
                $follow_model->update([
                    'user_follow_id' => Auth::id(),
                    'user_followed_id' => $username_id,
                    'user_follow_status' => 0,
                    'user_action_id' => Auth::id()
                ]);
                $this->state = "Follow";
                return;
            } else if ($follow_model->select('user_follow_status')->first() == 2) {
                $follow_model->update([
                    'user_follow_id' => Auth::id(),
                    'user_followed_id' => $username_id,
                    'user_follow_status' => 0,
                    'user_action_id' => Auth::id()
                ]);
                $this->state = "Follow";
                return;
            }
        } else {
            if ($user_model->select('is_private')->first() == 1) {
                User_Follow::insert([
                    'user_follow_id' => Auth::id(),
                    'user_followed_id' => $username_id,
                    'user_follow_status' => 1,
                    'user_action_id' => Auth::id()
                ]);
                $this->state = "Pending";
            } else {
                User_Follow::insert([
                    'user_follow_id' => Auth::id(),
                    'user_followed_id' => $username_id,
                    'user_follow_status' => 2,
                    'user_action_id' => Auth::id()
                ]);
                $this->state = "Followed";
            }
        }
        /* 
        0 - follpw
        if private  = 1 - pending
        2 - followed
        3 - declined
        4 - blocked
        */
    }

    public function render()
    {
        $user_model = User::where("username", $this->username)->select('id', 'name', 'username', 'profile_photo_path', 'background_image_url', 'created_at')->first();
        $about_model = User_About::where('id', $user_model->id)->first();
        $follow_model = User_Follow::where("user_follow_id", Auth::id())->where('user_followed_id', $user_model->select('id')->first());
        if ($follow_model->exists()) {
            $follow_status = $follow_model->select('user_follow_status');
            if ($follow_status == 1) {
                $this->state = "Unfollow";
            }
            if ($follow_status == 2) {
                $this->state = "Followed";
            }
            if ($follow_status == 3) {
                $this->state = "Follow";
            }
        } else {
            $this->state = "Follow";
        }
        return view('livewire.user-profile.nav.user-profile-info', ['user_model' => $user_model, 'about_model' => $about_model]);
    }
}
