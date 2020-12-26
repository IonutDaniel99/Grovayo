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
        $weather = $apiController->callWeatherApi();
        $user_about = User_About::where('user_id', Auth::id())->first();

        foreach (['world', 'science', 'technology', 'music', 'movies', 'games', 'sport'] as $topic) {
            $news[$topic] = News::all()->where("topic", $topic)->random(3);
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

    function whoViewedMyProfile()
    {
        $visitor_user_id = Profile_View::all()->where('profile_user_id', Auth::id())->sortByDesc('visitor_time')->values()->pluck('visitor_user_id');
        if ($visitor_user_id->isEmpty()) {
            $visitor_user_details = 0;
        } else {
            foreach ($visitor_user_id as $id) {
                $user = User::all()->where('id', $id);
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
