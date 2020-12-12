<?php

namespace App\Http\Livewire\Main;

use Livewire\Component;

class Main extends Component
{
    public $username;
    public function mount($username)
    {
        $this->username = $username;
    }
    public function render()
    {
        return view('livewire.user-profile.activity.main', ['username' => $this->username]);
    }
}
