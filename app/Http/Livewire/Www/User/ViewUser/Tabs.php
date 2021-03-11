<?php

namespace App\Http\Livewire\Www\User\ViewUser;

use App\Models\User;
use App\Models\User_Follow;
use Livewire\Component;

class Tabs extends Component
{
    public $username;

    public function mount($username)
    {
        $this->username = $username;
    }

    public function render()
    {
        $username_id = User::where("username", $this->username)->pluck("id")->first();
        $user_follow['followed_number'] = User_Follow::where("user_followed_id", $username_id)->where('user_follow_status', 2)->count();
        $user_follow['following_number'] = User_Follow::where("user_follow_id", $username_id)->where('user_follow_status', 2)->count();

        return view('livewire.www.user.view-user.tabs', ['username' => $this->username, "user_follow" => $user_follow]);
    }
}
