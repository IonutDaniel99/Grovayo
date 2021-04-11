<?php

namespace App\Http\Controllers\www\User;

use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\News;
use App\Models\User_About;
use App\Models\User_Follow;
use App\Models\User_Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user_about['user_country'] = User_About::where('user_id', Auth::id())->pluck('user_country')->first();
        $user_about['user_country'] = Country::where('id', $user_about['user_country'])->pluck('name')->first();

        $apiController = new ApiController;
        $weather = $apiController->callWeatherApiHome();

        $user_follow['followers_number'] = User_Follow::where("user_followed_id", Auth::id())->count();
        $user_follow['following_number'] = User_Follow::where('user_follow_id', Auth::id())->count();

        foreach (['world', 'science', 'technology', 'music', 'movies', 'games', 'sport'] as $topic) {
            $news[$topic] = News::inRandomOrder()->limit(3)->where("topic", $topic)->get();
        }

        $followed = User_Follow::where('user_follow_id', Auth::id())->where('user_follow_status', 2)->pluck('user_followed_id');
        return view('www.user.home', compact('news', 'weather', 'user_about', 'user_follow', 'followed'));
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
}
