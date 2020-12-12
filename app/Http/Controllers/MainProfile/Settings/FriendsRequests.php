<?php

namespace App\Http\Controllers\MainProfile\Settings;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\User_Follow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FriendsRequests extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auth_id = Auth::id();
        $follow_model = User_Follow::all()->where("user_followed_id", $auth_id)->toArray();
        $friends_request = [];
        foreach ($follow_model as $follow_data) {
            $follow_user = User::where('id', $follow_data['user_follow_id'])->first();
            array_push($friends_request, [
                'auth_id' => $auth_id,
                'follower_request_id' => $follow_data['user_follow_id'],
                'follower_request_username' => $follow_user['username'],
                'follower_request_profile_photo' => $follow_user['profile_photo_path'],
                'follower_request_name' => $follow_user['name'],
            ]);
        }
        return view('livewire.profile.settings.friends-request', ['friends_request' => $friends_request]);
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
