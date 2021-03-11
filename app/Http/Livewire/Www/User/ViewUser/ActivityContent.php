<?php

namespace App\Http\Livewire\Www\User\ViewUser;

use App\Models\News;
use App\Models\User;
use App\Models\User_About;
use App\Models\User_Follow;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ActivityContent extends Component
{
    public $username;
    public $is_private = 0;
    protected $listeners = ['setContentPrivate' => 'setContentVisibility'];
    public function setContentVisibility()
    {
        $this->is_private = 1;
    }

    public function render()
    {
        foreach (['world', 'science', 'technology', 'music', 'movies', 'games', 'sport'] as $topic) {
            $news[$topic] = News::inRandomOrder()->limit(3)->where("topic", $topic)->get();
        }
        $user_model = User::where("username", $this->username)->with('about_model')->first();
        $follow_model = User_Follow::where("user_follow_id", Auth::id())->where('user_followed_id', $user_model->pluck('id')->first());
        $user_model['isSocialNetworksNull'] = $this->isSocialPagesNull($user_model['about_model']);

        if ($user_model->pluck('is_private')->first() == 1 && $follow_model->pluck('user_follow_status')->first() != 2) {
            $this->is_private = 1;
        } else {
            $this->is_private = 0;
        }
        return view('livewire.www.user.view-user.activity-content', compact('news', 'user_model'));
    }

    function isSocialPagesNull($user_about)
    {

        foreach (json_decode($user_about, true) as $key => $value) {
            if (substr($key, 0, strlen('social_')) === 'social_') {
                if ($value != NULL) {
                    $user_about['isSocialNetworksNull'] = 1;
                    break;
                }
                $user_about['isSocialNetworksNull'] = 0;
            }
        }
        return $user_about['isSocialNetworksNull'];
    }
}
