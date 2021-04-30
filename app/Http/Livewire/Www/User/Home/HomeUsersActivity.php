<?php

namespace App\Http\Livewire\Www\User\Home;

use App\Models\Posts_Reports;
use App\Models\User;
use App\Models\User_Comments;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HomeUsersActivity extends Component
{
    public $replayText;
    public $amount = 10;
    public $post;

    public function load()
    {
        $this->amount += 5;
    }

    public function report_post($id)
    {
        $report = new Posts_Reports;
        $report->user_id = Auth::id();
        $report->post_id = $id;
        $report->save();
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
        $user_model = User::where("id", $this->post->author_id)->get()->first();
        return view('livewire.www.user.home.home-users-activity', ['post' => $this->post, 'user_model' => $user_model]);
    }
}
