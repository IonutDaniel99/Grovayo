<?php

namespace App\Http\Livewire\Www\User\AuthUser;

use App\Models\User;
use App\Models\User_Posts;
use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class Posts extends Component
{
    use WithFileUploads;

    public $activityText;
    public $activityPhoto;

    public function clearData()
    {
        $this->reset();
    }
    public function activityUpload()
    {

        $user_model = User::where('id', Auth::id())->with("posts")->get();
        $username = $user_model->pluck('username')->first();
        $activityText = $this->activityText;
        $activityPhoto = $this->activityPhoto;
        if ($activityPhoto != null) {
            $this->validate([
                'activityPhoto' => ['image', 'max:4096'],
            ]);
            $activityPhotoName = $username . '-photo-' . now()->timestamp . '.' . $activityPhoto->getClientOriginalExtension();
            $this->activityPhoto->storeAs('/public/users/' . $username . '/posts-images/', $activityPhotoName);
            $post_content_path = '/public/users' . $username . '/posts-images/' . $activityPhotoName;
        } else {
            $post_content_path = null;
        }

        $post = new User_Posts;
        $post->author_id = Auth::id();
        $post->post_description = $activityText;
        $post->post_content = $post_content_path;
        $post->post_likes = 0;

        $post->save();

        $this->clearData();
    }
    public function render()
    {
        $user_model = User::where('id', Auth::id())->with("posts")->get();
        return view('livewire.www.user.auth-user.posts', ['user_model' => $user_model]);
    }
}
