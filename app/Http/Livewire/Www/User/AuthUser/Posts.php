<?php

namespace App\Http\Livewire\Www\User\AuthUser;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Posts extends Component
{

    public function render()
    {
        return view('livewire.www.user.auth-user.posts');
    }
}
