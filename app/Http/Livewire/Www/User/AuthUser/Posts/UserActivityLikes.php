<?php

namespace App\Http\Livewire\Www\User\AuthUser\Posts;

use App\Models\Likes;
use App\Models\User_Posts;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserActivityLikes extends Component
{
    public $post_id;
    public $post_likes;
    public $voted = false;

    public function mount($post_id, $post_likes)
    {
        $this->post_id = $post_id;
        $this->post_likes = $post_likes;
    }

    public function vote()
    {
        if (Likes::where('user_id', Auth::id())->where('post_id', $this->post_id)->exists()) {
            User_Posts::where('id', $this->post_id)->decrement('post_likes');
            Likes::where('post_id', $this->post_id)->where('user_id', Auth::id())->delete();
        } else {
            $likes = new Likes;
            $likes->user_id = Auth::id();
            $likes->post_id = $this->post_id;
            $likes->vote = true;
            $likes->save();
            User_Posts::where('id', $this->post_id)->increment('post_likes');
        };
    }
    public function render()
    {
        $likes_number = User_Posts::where('id', $this->post_id)->pluck('post_likes')->first();
        if (Likes::where('user_id', Auth::id())->where('post_id', $this->post_id)->count() > 0) {
            $this->voted = true;
        }
        return view('livewire.www.user.auth-user.posts.user-activity-likes', ['likes_number' => $likes_number, 'voted' => $this->voted]);
    }
}
