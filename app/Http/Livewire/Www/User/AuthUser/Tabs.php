<?php

namespace App\Http\Livewire\Www\User\AuthUser;

use App\Models\User_Follow;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Tabs extends Component
{
    public $username;

    public function render()
    {
        $user_follow['followed_number'] = User_Follow::where('user_followed_id', Auth::id())->count();
        $user_follow['following_number'] = User_Follow::where('user_follow_id', Auth::id())->count();
        return view('livewire.www.user.auth-user.tabs', ['user_follow' => $user_follow]);
    }
}
