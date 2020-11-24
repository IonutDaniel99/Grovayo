<?php

namespace App\Http\Livewire\Nav;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navigation extends Component
{
    public function render()
    {
        $admin = User::where('id', Auth::id())->first();
        if ($admin !== NULL)
            return view('livewire.nav.navigation', ['admin' => $admin->is_admin]);
        else
            return view('livewire.nav.navigation');
    }
}
