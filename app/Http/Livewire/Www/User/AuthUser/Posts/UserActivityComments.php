<?php

namespace App\Http\Livewire\Www\User\AuthUser\Posts;

use App\Models\User;
use App\Models\User_Comments;
use Livewire\Component;

class UserActivityComments extends Component
{

    protected $listeners = ['updateActivityCommentsPosts' => 'render'];

    public $post_id;


    public function render()
    {
        $activityComments = User_Comments::where('post_id', $this->post_id)->with('user')->orderBy("created_at", "DESC")->get();
        return view('livewire.www.user.auth-user.posts.user-activity-comments', ['activityComments' => $activityComments]);
    }
}
