<?php

namespace App\Http\Livewire\Nav\Profile;

use Livewire\Component;

class Tabs extends Component
{

    public $username;

    public function render()
    {
        return view('livewire.profile.nav.profile.tabs');
    }
}
