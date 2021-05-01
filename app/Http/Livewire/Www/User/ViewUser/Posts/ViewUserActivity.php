<?php

namespace App\Http\Livewire\Www\User\ViewUser\Posts;

use App\Models\Posts_Reports;
use App\Models\User;
use App\Models\User_Comments;
use App\Models\User_Posts;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ViewUserActivity extends Component
{
    public $username;
    public $replayText;
    public $amount = 10;
    public $postsNumber;

    protected $listeners = ['updateViewUserActivityPosts' => 'render'];

    public function mount($username)
    {
        $this->username = $username;
    }

    public function load()
    {
        $this->amount += 5;
    }

    public function report_post($id)
    {
        $is_report = Posts_Reports::where('user_id', Auth::id())->where("post_id", $id)->exists();
        if (!$is_report) {
            $report = new Posts_Reports();
            $report->user_id = Auth::id();
            $report->post_id = $id;
            $report->save();
        }
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
        $this->emit('updateViewUserActivityCommentsPost');
    }

    public function render()
    {
        $user_model = User::where("username", $this->username)->get()->first();
        $posts = User_Posts::where('author_id', $user_model->id)->with('comments', 'likes')->orderBy("created_at", "DESC");
        $this->postsNumber = $posts->count();
        $user_posts = $posts->take($this->amount)->get();
        return view('livewire.www.user.view-user.posts.view-user-activity', ['user_model' => $user_model, 'user_posts' => $user_posts]);
    }
}
