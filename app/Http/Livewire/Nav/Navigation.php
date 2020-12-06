<?php

namespace App\Http\Livewire\Nav;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navigation extends Component
{

    public function render()
    {
        return view('livewire.nav.navigation');
    }
}
