<?php

namespace App\Http\Controllers\www\User\Auth_User;

use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Profile_View;
use App\Models\User;
use App\Models\User_About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apiController = new ApiController;
        $weather = $apiController->callWeatherApiHome();
        $user_about = User_About::where('user_id', Auth::id())->first();

        foreach (['world', 'science', 'technology', 'music', 'movies', 'games', 'sport'] as $topic) {
            $news[$topic] = News::inRandomOrder()->limit(3)->where("topic", $topic)->get();
        }
        $this->isSocialPagesNull($user_about);
        $viewed_profile = $this->whoViewedMyProfile();
        return view('www.user.auth_user.activity', compact('weather', 'user_about', 'news', 'viewed_profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
    }
    /**
     * @return array Return last 5 user who visited current user profile from Profile_View table.
     */
    function whoViewedMyProfile()
    {
        $visitor_user_id = Profile_View::where('profile_user_id', Auth::id())->orderBy('visitor_time', 'DESC')->pluck('visitor_user_id');
        if ($visitor_user_id->isEmpty()) {
            $visitor_user_details = 0;
        } else {
            foreach ($visitor_user_id as $id) {
                $user = User::where('id', $id);
                $visitor_user_details[] = [
                    'visitor_name' => $user->pluck('name')->first(),
                    'visitor_image' => $user->pluck('profile_photo_path')->first(),
                    'visitor_username' => $user->pluck('username')->first()
                ];
            };
        }
        return $visitor_user_details;
    }
}
