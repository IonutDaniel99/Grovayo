<?php

namespace App\Http\Livewire\Www\User\ViewUser;

use App\Models\User;
use App\Models\User_Follow;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AboutContent extends Component
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
        $user_model = User::where("username", $this->username)->with('about_model')->first();
        $username_id = $user_model->id;
        $follow_model = User_Follow::where("user_follow_id", Auth::id())->where('user_followed_id', $username_id);

        if ($user_model->pluck('is_private')->first() == 1 && $follow_model->pluck('user_follow_status')->first() != 2) {
            $this->is_private = 1;
        } else {
            $this->is_private = 0;
        }

        return view('livewire.www.user.view-user.about-content', ['user_model' => $user_model]);
    }
}
