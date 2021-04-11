<?php

namespace App\Http\Livewire\Www\User\Home;

use App\Models\User_Posts;
use Livewire\Component;

class HomeActivity extends Component
{
    public $followed;

    public function render()
    {
        $all_posts = [];
        foreach ($this->followed as $key) {
            $post = User_Posts::where("author_id", $key)->orderBy("created_at", "DESC")->get();
            if (!$post->isEmpty()) {
                array_push($all_posts, $post->first());
            }
        }
        return view('livewire.www.user.home.home-activity', ['all_posts' => $all_posts]);
    }
}
