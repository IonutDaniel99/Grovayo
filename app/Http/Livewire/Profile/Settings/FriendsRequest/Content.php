<?php

namespace App\Http\Livewire\Profile\Settings\FriendsRequest;

use Livewire\Component;

class Content extends Component
{
    public $post;
    public function render()
    {
        return view('livewire.profile.settings.friends-request.content', ["friend_request" => $this->post]);
    }
}
