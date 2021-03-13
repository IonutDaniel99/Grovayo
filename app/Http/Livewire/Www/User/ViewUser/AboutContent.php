<?php

namespace App\Http\Livewire\Www\User\ViewUser;

use App\Models\User;
use App\Models\User_About;
use App\Models\User_Follow;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Country;

class AboutContent extends Component
{

    public $username;
    public $is_private = 0;
    protected $listeners = ['setContentPrivate' => 'setContentVisibility'];
    public function setContentVisibility()
    {
        $this->is_private = 1;
    }
    /**
     * Search specified user to see if any social media webpage is completed.
     * @param Model $user_about necesary to grab social pages from User_About table
     * @return bool if user has social pages or not
     */
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

    /**
     * Search specified user to see if any favorites  is completed.
     * @param Model $user_about necesary to grab favorites data from User_About table
     * @return bool if user has favorites or not
     */
    function isFavouritesNull($user_about)
    {
        foreach (json_decode($user_about, true) as $key => $value) {
            if (substr($key, 0, strlen('favourite_')) === 'favourite_') {
                if ($value != NULL) {
                    $user_about['isFavouritesNull'] = 1;
                    break;
                }
                $user_about['isFavouritesNull'] = 0;
            }
        }
        return $user_about['isFavouritesNull'];
    }

    public function render()
    {
        $user_model = User::where("username", $this->username)->with('about_model')->first();
        $follow_model = User_Follow::where("user_follow_id", Auth::id())->where('user_followed_id', $user_model->id);
        $user_model['about_model']['user_country'] = Country::where('id', $user_model['about_model']['user_country'])->pluck('name')->first();
        $user_model['isSocialNetworksNull'] = $this->isSocialPagesNull($user_model['about_model']);
        $user_model['isFavouritesNull'] = $this->isFavouritesNull($user_model['about_model']);

        if ($user_model['about_model']['birthday'] != NULL)
            $user_model['about_model']['birthday'] = date('F j, Y', strtotime($user_model['about_model']['birthday']));


        if ($user_model['is_private'] == 1 && $follow_model->pluck('user_follow_status')->first() != 2) {
            $this->is_private = 1;
        } else {
            $this->is_private = 0;
        }


        return view('livewire.www.user.view-user.about-content', ['user_model' => $user_model]);
    }
}
