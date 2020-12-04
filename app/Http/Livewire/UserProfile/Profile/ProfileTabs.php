<?php

namespace App\Http\Livewire\UserProfile\Profile;

use Livewire\Component;

class ProfileTabs extends Component
{
    public $username;

    public function mount($username)
    {
        $this->username = $username;
    }

    public function render()
    {
        return view('livewire.user-profile.profile.profile-tabs', ['username' => $this->username]);
    }
}
