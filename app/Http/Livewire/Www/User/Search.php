<?php

namespace App\Http\Livewire\Www\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Search extends Component
{

    public $query;
    public $users;

    public function mount()
    {
        $this->resetQuery();
    }

    public function resetQuery()
    {
        $this->query = '';
        $this->contacts = [];
    }

    public function updatedQuery()
    {
        sleep(1);
        $this->users = User::query()->with('about_model', 'follower')
            ->where(function ($query) {
                $query->where('name', 'like', '%' . $this->query . '%')
                    ->orWhere('username', 'like', '%' . $this->query . '%');
            })
            ->where('id', '!=', Auth::id())
            ->take(20)->get()->toArray();
    }

    public function render()
    {
        return view('livewire.www.user.search');
    }
}
