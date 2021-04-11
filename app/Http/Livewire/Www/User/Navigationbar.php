<?php

namespace App\Http\Livewire\Www\User;

use App\Models\User;
use App\Models\User_Follow;
use App\Models\User_Posts;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navigationbar extends Component
{
    /**
     * Function to accept user following request.
     * @param id $username_id User id from User Table.
     */
    public function accept($username_id)
    {
        $auth_id = Auth::id();
        $follow_model = User_Follow::where("user_followed_id", $auth_id)->where('user_follow_id', $username_id);
        $follow_model->update([
            'user_follow_status' => 2,
            'user_action_id' => $auth_id,
            'updated_at' => now()

        ]);
    }
    /**
     * Function to decline user following request.
     * @param id $username_id User id from User Table.
     */
    public function decline($username_id)
    {
        $auth_id = Auth::id();
        $follow_model = User_Follow::where("user_followed_id", $auth_id)->where('user_follow_id', $username_id);
        $follow_model->update([
            'user_follow_status' => 0,
            'user_action_id' => $auth_id,
            'updated_at' => now()

        ]);
    }
    public function render()
    {
        $friends_request = [];
        if (Auth::user()->is_private == 0) {
            $latest_friends = [];
            $follow_model_approved = User_Follow::with('user_follow')->where("user_followed_id", Auth::id())->where('user_follow_status', 2)->orderBy('id')->take(3)->get();
            foreach ($follow_model_approved as $follow_data_approved) {
                array_push($latest_friends, [
                    'follower_request_id' => $follow_data_approved['user_follow_id'],
                    'follower_request_username' => $follow_data_approved->user_follow->pluck('username')->first(),
                    'follower_request_profile_photo' => $follow_data_approved->user_follow->pluck('profile_photo_path')->first(),
                    'follower_request_name' => $follow_data_approved->user_follow->pluck('name')->first(),
                    'follower_request_date' => $follow_data_approved['created_at']
                ]);
            }
        } else {
            $latest_friends = NULL;
        }
        $follow_model_pending = User_Follow::with('user_follow')->where("user_followed_id", Auth::id())->where('user_follow_status', 1)->get();
        foreach ($follow_model_pending as $follow_data_pending) {
            array_push($friends_request, [
                'follower_request_id' => $follow_data_pending['user_follow_id'],
                'follower_request_username' => $follow_data_pending->user_follow->pluck('username')->first(),
                'follower_request_profile_photo' => $follow_data_pending->user_follow->pluck('profile_photo_path')->first(),
                'follower_request_name' => $follow_data_pending->user_follow->pluck('name')->first(),
                'follower_request_date' => $follow_data_pending['created_at']
            ]);
        }


        //#########################################33
        /**
         * Likes = 1
         * Comments = 2
         * 
         */
        $user_post = User_Posts::where('author_id', Auth::id())->with('comments', 'likes')->orderBy("created_at", "DESC")->first();
        $latest_activities = [];
        if ($user_post !== null) {
            foreach ($user_post->likes as $like) {
                $user = User::where('id', $like->user_id)->select('name', 'profile_photo_path')->get()->first();
                array_push($latest_activities, [
                    "type" => 1,
                    "like_user_name" => $user->name,
                    "like_user_photo" => $user->profile_photo_path,
                    "created_at" => $like->created_at->format('Y-m-d H:i:s'),
                ]);
            }

            foreach ($user_post->comments as $comment) {
                $user = User::where('id', $comment->user_id)->select('name', 'profile_photo_path')->get()->first();
                array_push($latest_activities, [
                    "type" => 2,
                    "comment_user_name" => $user->name,
                    "comment_user_photo" => $user->profile_photo_path,
                    "comment_content" => $comment->comment_content,
                    "comment_photo" => $user_post->post_content ? true : false,
                    "created_at" => $comment->created_at->format('Y-m-d H:i:s'),
                ]);
            }
            $latest_activities = collect($latest_activities)->take(8)->sortBy('created_at')->reverse()->toArray();
        } else {
            $latest_activities == NULL;
        }
        return view('livewire.www.user.navigationbar', ['friends_request' => $friends_request, 'latest_friends' => $latest_friends, "latest_activities" => $latest_activities]);
    }
}
