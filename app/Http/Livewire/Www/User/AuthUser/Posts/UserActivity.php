<?php

namespace App\Http\Livewire\Www\User\AuthUser\Posts;

use App\Models\Likes;
use App\Models\User;
use App\Models\User_Comments;
use App\Models\User_Posts;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class UserActivity extends Component
{

    protected $listeners = ['updateActivityPosts' => 'render'];
    public $replayText;
    public $activityTextEdit;
    public $amount = 10;
    public $postsNumber;

    public function deleteActivity($post_id)
    {

        $post = User_Posts::where('id', $post_id)->where('author_id', Auth::id());
        File::delete($post->pluck('post_content')->first());
        $post->delete();
    }

    public function updateActivityText($post_id)
    {
        $this->validate([
            'activityTextEdit' => 'required|max:5000'
        ]);
        User_Posts::where('id', $post_id)->where('author_id', Auth::id())->update(["post_description" => $this->activityTextEdit]);
        $this->reset('activityTextEdit');
    }

    public function load()
    {
        $this->amount += 5;
    }

    public function replayUpload($post_id)
    {
        $replayText = $this->replayText;
        $this->validate([
            'replayText' => 'required|max:5000',
        ]);
        $comment = new User_Comments();
        $comment->user_id = Auth::id();
        $comment->post_id = $post_id;
        $comment->comment_content = $replayText;
        $comment->save();

        $this->reset('replayText');
        $this->emit('updateActivityCommentsPosts');
    }

    public function render()
    {
        $user_model = User::where("id", Auth::id())->get()->first();
        $posts = User_Posts::where('author_id', Auth::id())->with('comments', 'likes')->orderBy("created_at", "DESC");
        $this->postsNumber = $posts->count();
        $user_posts = $posts->take($this->amount)->get();
        return view('livewire.www.user.auth-user.posts.user-activity', ['user_model' => $user_model, 'user_posts' => $user_posts]);
    }
}
