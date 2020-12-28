<?php

namespace App\Http\Livewire\Www\User\ViewUser;

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
        return view('livewire.www.user.view-user.tabs', ['username' => $this->username]);
    }
}
