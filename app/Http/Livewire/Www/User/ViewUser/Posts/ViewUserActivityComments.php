<?php

namespace App\Http\Livewire\Www\User\ViewUser\Posts;

use App\Models\User_Comments;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ViewUserActivityComments extends Component
{
    protected $listeners = ['updateViewUserActivityCommentsPost' => 'render'];

    public $post_id;
    public $user_id;
    public $amount = 3;
    public $commentsNumber;

    public function load()
    {
        $this->amount += 5;
    }

    public function deleteComment($comment_id)
    {
        $comment = User_Comments::where('id', $comment_id)->with("post")->first();
        if ($comment->user_id === Auth::id()) {
            $comment->delete();
        }
    }

    public function render()
    {
        $comments = User_Comments::where('post_id', $this->post_id)->with('user')->orderBy("created_at", "DESC");
        $this->commentsNumber = $comments->count();
        $activityComments = $comments->take($this->amount)->get();
        return view('livewire.www.user.view-user.posts.view-user-activity-comments', ['activityComments' => $activityComments]);
    }
}
