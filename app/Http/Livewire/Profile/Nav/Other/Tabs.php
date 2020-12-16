<?php

namespace App\Http\Livewire\Profile\Nav\Other;

use Livewire\Component;

class Tabs extends Component
{

    public $username;

    public function render()
    {
        return view('livewire.profile.nav.other.tabs');
    }
}
