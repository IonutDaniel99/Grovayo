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
    public $auth_user_id;
    public $state = false;


    public function mount($username)
    {
        $this->auth_user_id = Auth::id();
        $this->username = $username;
    }

    public function toggle_follow_state()
    {
        $user_model = User::where("username", $this->username);
        $username_id = $user_model->pluck('id')->first();
        $follow_model = User_Follow::where("user_follow_id", $this->auth_user_id)->where('user_followed_id', $username_id);
        sleep(1);
        if ($follow_model->exists()) {
            if ($user_model->pluck('is_private')->first() == 1 && $follow_model->pluck('user_follow_status')->first() == 0) {
                $follow_model->update([
                    'user_follow_id' => $this->auth_user_id,
                    'user_followed_id' => $username_id,
                    'user_follow_status' => 1,
                    'user_action_id' => $this->auth_user_id
                ]);
                $this->state = "Pending";
                return;
            }
            if ($follow_model->pluck('user_follow_status')->first() == 0) {
                $follow_model->update([
                    'user_follow_id' => $this->auth_user_id,
                    'user_followed_id' => $username_id,
                    'user_follow_status' => 2,
                    'user_action_id' => $this->auth_user_id,
                ]);
                $this->state = "Followed";
                return;
            }
            if ($follow_model->pluck('user_follow_status')->first() == 1) {
                $follow_model->update([
                    'user_follow_id' => $this->auth_user_id,
                    'user_followed_id' => $username_id,
                    'user_follow_status' => 0,
                    'user_action_id' => $this->auth_user_id,
                ]);
                $this->state = "Follow";
                return;
            } else if ($follow_model->pluck('user_follow_status')->first() == 2) {
                $follow_model->update([
                    'user_follow_id' => $this->auth_user_id,
                    'user_followed_id' => $username_id,
                    'user_follow_status' => 0,
                    'user_action_id' => $this->auth_user_id,
                ]);
                $this->state = "Follow";
                $this->emit('setContentPrivate');
                return;
            }
        } else {
            if ($user_model->pluck('is_private')->first() == 1) {
                User_Follow::insert([
                    'user_follow_id' => $this->auth_user_id,
                    'user_followed_id' => $username_id,
                    'user_follow_status' => 1,
                    'user_action_id' => $this->auth_user_id
                ]);
                $this->state = "Pending";
            } else {
                User_Follow::insert([
                    'user_follow_id' => $this->auth_user_id,
                    'user_followed_id' => $username_id,
                    'user_follow_status' => 2,
                    'user_action_id' => $this->auth_user_id
                ]);
                $this->state = "Followed";
            }
        }
        /* 
        0 - follpw
        if private  = 1 - pending
        2 - followed
        3 - blocked
        */
    }

    public function render()
    {
        $user_model = User::where("username", $this->username)->select('id', 'name', 'username', 'profile_photo_path', 'background_image_url', 'created_at')->first();
        $about_model = User_About::where('user_id', $user_model->id)->first();
        $follow_model = User_Follow::where("user_follow_id", $this->auth_user_id)->where('user_followed_id', $user_model->id);

        if ($follow_model->exists()) {
            $follow_status = $follow_model->pluck('user_follow_status')->first();
            if ($follow_status == 0) {
                $this->state = "Follow";
            }
            if ($follow_status == 1) {
                $this->state = "Pending";
            }
            if ($follow_status == 2) {
                $this->state = "Followed";
            }
        } else {
            $this->state = "Follow";
        }
        return view('livewire.user-profile.nav.user-profile-info', ['user_model' => $user_model, 'about_model' => $about_model]);
    }
}
