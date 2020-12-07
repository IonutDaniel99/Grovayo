<?php

namespace App\Http\Livewire\Nav\Profile;

use Livewire\Component;

class Tabs extends Component
{

    public $user_about;

    public function render()
    {
        return view('livewire.profile.nav.profile.tabs', ['user_about' => $this->user_about]);
    }
}
