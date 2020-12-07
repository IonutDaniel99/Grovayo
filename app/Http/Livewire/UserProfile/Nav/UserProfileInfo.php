<?php

namespace App\Http\Livewire\UserProfile\Nav;

use App\Models\User;
use App\Models\User_About;
use Livewire\Component;

class UserProfileInfo extends Component
{

    public $username;

    public function mount($username)
    {
        $this->username = $username;
    }

    public function render()
    {
        $user_model = User::where("username", $this->username)->select('id', 'name', 'username', 'profile_photo_path', 'background_image_url', 'created_at')->first();
        $about_model = User_About::where('id', $user_model->id)->first();
        return view('livewire.user-profile.nav.user-profile-info', ['user_model' => $user_model, 'about_model' => $about_model]);
    }
}
