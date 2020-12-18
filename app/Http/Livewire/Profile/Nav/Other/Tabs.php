<?php

namespace App\Http\Livewire\Profile\Nav\Other;

use App\Models\User_Follow;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Tabs extends Component
{

    public $username;

    public function render()
    {
        $user_about['followed_number'] = User_Follow::where('user_followed_id', Auth::id())->count();
        $user_about['following_number'] = User_Follow::where('user_follow_id', Auth::id())->count();
        return view('livewire.profile.nav.other.tabs', ['user_about' => $user_about]);
    }
}
