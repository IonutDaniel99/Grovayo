<?php

namespace App\Http\Livewire\Www\Admin;

use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class GrovayoMembers extends Component
{
    public $first_name;
    public $username;
    public $email;
    public $password;
    public $role;

    protected $rules = [
        'first_name' => 'required|min:6|string|max:255',
        'username' => 'required|string|unique:users|max:100|min:8|regex:/^[a-zA-Z0-9._a-zA-Z0-9]{1,}$/',
        'email' => 'required|email|string|max:255|unique:users',
        'password' => 'required|min:8',
    ];

    public function add_new_member()
    {
        $this->validate();

        $user = new User;
        $user->name = $this->first_name;
        $user->username = $this->username;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);
        $user->email_verified_at = Carbon::now();
        $user->assignRole($this->role);
        $user->save();
    }

    public function delete_user($id)
    {
        User::where('id', $id)->delete();
    }

    public function render()
    {
        $latest_users =
            User::query()->with("roles")
            ->whereHas('roles', function ($q) {
                $q->where('name', "!=", "User");
            })
            ->paginate(5);
        $roles = Role::get();
        return view('livewire.www.admin.grovayo-members', ['latest_users' => $latest_users, 'roles' => $roles]);
    }
}
