<?php

namespace App\Http\Livewire\Www\Admin;

use Illuminate\Foundation\Auth\User;
use Livewire\Component;
use Livewire\WithPagination;

class LatestMembers extends Component
{

    use WithPagination;

    public function render()
    {
        $latest_users =  User::orderby('created_at', 'desc')->paginate(10);
        return view('livewire.www.admin.latest-members', ['latest_users' => $latest_users]);
    }
}
