<?php

namespace App\Http\Controllers\UserProfile;

use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Controller;
use App\Models\Profile_View;
use App\Models\User;
use App\Models\User_Follow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Profiler\Profile;

class UserActivityController extends Controller
{

    public $username;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index($username)
    {
        $user_model = User::where('username', $username)->first();
        if (!$user_model || $user_model === NULL) {
            return view('errors.404-user');
        }

        $follow_model = User_Follow::where("user_follow_id", Auth::id())->where('user_followed_id', $user_model->id)->pluck('user_follow_status')->first();

        if ($follow_model == 3) {
            return view('errors.404-user');
        } elseif ($follow_model == 2) {
            $is_private = 0;
        } else {
            $is_private = 1;
        }

        $this->viewdProfile($user_model);


        return view('livewire.user-profile.activity.main', compact('username', 'user_model', 'is_private'));
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
     * Return the last 5 users who visited your profile
     * @param username $data
     * @return App\Models\Profile_View\update;
     * @return App\Models\Profile_View\insert;
     */
    function viewdProfile($data)
    {
        if ($data["id"] == Auth::id()) {
            return;
        }

        if (Profile_View::where('profile_user_id', $data["id"])->get()->count() > 4) {
            if (Profile_View::where('profile_user_id', $data["id"])->where('visitor_user_id', Auth::id())->exists()) {
                Profile_View::where('profile_user_id', $data["id"])->where('visitor_user_id', Auth::id())->update([
                    'visitor_time' => now()
                ]);
            } else {
                Profile_View::where('profile_user_id', $data["id"])->orderBy('visitor_time')->get()->first()->update([
                    'visitor_user_id' => Auth::id(),
                    'visitor_time' => now()
                ]);
            }
        } else {
            if (Profile_View::where('profile_user_id', $data["id"])->where('visitor_user_id', Auth::id())->exists()) {
                Profile_View::where('profile_user_id', $data["id"])->where('visitor_user_id', Auth::id())->update([
                    'visitor_time' => now()
                ]);
            } else {
                Profile_View::insert([
                    'profile_user_id' => $data['id'],
                    'visitor_user_id' => Auth::id(),
                    'visitor_time' => now()
                ]);
            }
        }
    }
}
