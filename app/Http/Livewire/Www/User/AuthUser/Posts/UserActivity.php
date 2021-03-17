<?php

namespace App\Http\Livewire\Www\User\AuthUser\Posts;

use App\Models\User;
use App\Models\User_Comments;
use App\Models\User_Posts;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class UserActivity extends Component
{

    protected $listeners = ['updateActivityPosts' => 'render'];


    public $replayText;


    public function clearData()
    {
        $this->reset();
    }

    public function deleteActivity($post_id)
    {

        User_Posts::where('id', $post_id)->where('author_id', Auth::id())->delete();
    }

    public function replayUpload($post_id)
    {

        $replayText = $this->replayText;
        $comment = new User_Comments();
        $comment->user_id = Auth::id();
        $comment->post_id = $post_id;
        $comment->comment_content = $replayText;
        $comment->save();

        $this->clearData();
        $this->emit('updateActivityCommentsPosts');
    }

    public function render()
    {
        $user_model = User::where("id", Auth::id())->get()->first();
        $user_posts = User_Posts::where('author_id', Auth::id())->with('comments')->orderBy("created_at", "DESC")->take(6)->get();
        return view('livewire.www.user.auth-user.posts.user-activity', ['user_model' => $user_model, 'user_posts' => $user_posts]);
    }
}
