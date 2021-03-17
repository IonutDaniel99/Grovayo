<?php

namespace App\Http\Livewire\Www\User\AuthUser\Posts;

use App\Models\User;
use App\Models\User_Comments;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserActivityComments extends Component
{

    protected $listeners = ['updateActivityCommentsPosts' => 'render'];

    public $post_id;


    public function deleteComment($comment_id)
    {
        dd("TODO");
    }

    public function render()
    {
        $activityComments = User_Comments::where('post_id', $this->post_id)->with('user')->orderBy("created_at", "DESC")->take(3)->get();
        return view('livewire.www.user.auth-user.posts.user-activity-comments', ['activityComments' => $activityComments]);
    }
}
