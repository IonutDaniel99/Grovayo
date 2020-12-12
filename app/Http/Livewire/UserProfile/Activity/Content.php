<?php

namespace App\Http\Livewire\UserProfile\Activity;

use App\Models\User;
use App\Models\User_Follow;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Content extends Component
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
        $follow_model = User_Follow::where("user_follow_id", Auth::id())->where('user_followed_id', $username_id);

        if ($user_model->pluck('is_private')->first() == 1 && $follow_model->pluck('user_follow_status')->first() != 2) {
            $this->is_private = 1;
        } else {
            $this->is_private = 0;
        }
        return view('livewire.user-profile.activity.content');
    }
}
