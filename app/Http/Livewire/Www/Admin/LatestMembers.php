<?php

namespace App\Http\Livewire\Www\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class LatestMembers extends Component
{

    use WithPagination;

    public function render()
    {
        $latest_users =  User::query()->with("roles")
            ->whereHas('roles', function ($q) {
                $q->where('name', "User");
            })->orderby('created_at', 'desc')->paginate(10);
        return view('livewire.www.admin.latest-members', ['latest_users' => $latest_users]);
    }
}
