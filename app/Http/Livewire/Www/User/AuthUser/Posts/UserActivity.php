<?php

namespace App\Http\Livewire\Www\User\AuthUser\Posts;

use App\Models\User;
use App\Models\User_Posts;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class UserActivity extends Component
{

    protected $listeners = ['updateActivityPosts' => 'render'];


    public function render()
    {
        $user_model = User::where("id", Auth::id())->get()->first();
        $user_posts = User_Posts::where('author_id', Auth::id())->with('comments')->orderBy("created_at", "DESC")->get();
        return view('livewire.www.user.auth-user.posts.user-activity', ['user_model' => $user_model, 'user_posts' => $user_posts]);
    }
}
