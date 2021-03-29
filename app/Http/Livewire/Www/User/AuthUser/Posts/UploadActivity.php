<?php

namespace App\Http\Livewire\Www\User\AuthUser\Posts;

use App\Models\User;
use App\Models\User_Posts;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class UploadActivity extends Component
{
    use WithFileUploads;

    public $activityText;
    public $activityPhoto;

    public function clearData()
    {
        $this->reset();
    }

    public function hydrate()
    {
        $this->resetErrorBag();
    }

    public function activityUpload()
    {
        $this->resetErrorBag();
        if ($this->activityPhoto == null) {
            $this->validate([
                'activityText' => 'required|max:5000'
            ]);
        }
        $user_model = User::where('id', Auth::id())->with("posts")->get();
        $username = $user_model->pluck('username')->first();
        if ($this->activityPhoto != null) {
            $this->validate([
                'activityPhoto' => 'image|max:4096',
            ]);
            $activityPhotoName = $username . '-photo-' . now()->timestamp . '.' . $this->activityPhoto->getClientOriginalExtension();
            $this->activityPhoto->storeAs('public/users/' . $username . '/posts-images/', $activityPhotoName);
            $post_content_path = 'storage/users/' . $username . '/posts-images/' . $activityPhotoName;
        } else {
            $post_content_path = null;
        }

        $post = new User_Posts;
        $post->author_id = Auth::id();
        $post->post_description = $this->activityText;
        $post->post_content = $post_content_path;
        $post->post_likes = 0;

        $post->save();
        $this->clearData();
        $this->emit('updateUserInfo');
        $this->emit('updateActivityPosts');
    }
    public function render()
    {
        $user_model = User::where('id', Auth::id())->with("posts")->get();
        return view('livewire.www.user.auth-user.posts.upload-activity', ['user_model' => $user_model]);
    }
}
