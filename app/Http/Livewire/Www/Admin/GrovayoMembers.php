<?php

namespace App\Http\Livewire\Www\Admin;

use App\Models\User;
use Livewire\Component;

class GrovayoMembers extends Component
{

    public function add_new_member()
    {
    }

    public function render()
    {
        $latest_users =
            User::query()->with("roles")
            ->whereHas('roles', function ($q) {
                $q->where('name', "!=", "User");
            })
            ->paginate(5);
        return view('livewire.www.admin.grovayo-members', ['latest_users' => $latest_users]);
    }
}
