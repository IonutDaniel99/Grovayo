<?php

namespace App\Http\Livewire\Www\User\AuthUser\Posts;

use App\Models\User_Comments;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserActivityComments extends Component
{

    protected $listeners = ['updateActivityCommentsPosts' => 'render'];

    public $post_id;
    public $amount = 3;
    public $commentsNumber;
    public $activityCommentEdit;

    public function load()
    {
        $this->amount += 3;
    }

    public function updateActivityComment($comment_id)
    {
        User_Comments::where('id', $comment_id)->where('user_id', Auth::id())->update(["comment_content" => $this->activityCommentEdit]);
        $this->reset('activityCommentEdit');
    }

    public function deleteComment($comment_id)
    {
        User_Comments::where('id', $comment_id)->where('post_id', $this->post_id)->delete();
    }

    public function render()
    {
        $Comments = User_Comments::where('post_id', $this->post_id)->with('user')->orderBy("created_at", "DESC");
        $this->commentsNumber = $Comments->count();
        $activityComments = $Comments->take($this->amount)->get();
        return view('livewire.www.user.auth-user.posts.user-activity-comments', ['activityComments' => $activityComments]);
    }
}
