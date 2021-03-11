<?php

namespace App\Http\Controllers\www\user\view_user;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\User_Follow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserFollowingController extends Controller
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

        $follow_model_a_to_b = User_Follow::where("user_follow_id", Auth::id())->where('user_followed_id', $user_model->id)->pluck('user_follow_status')->first();
        $follow_model_b_to_a = User_Follow::where("user_followed_id", Auth::id())->where('user_follow_id', $user_model->id)->pluck('user_follow_status')->first();

        if ($follow_model_a_to_b == 3 || $follow_model_b_to_a == 3) {
            return view('errors.404-user')->with('message', "This user has blocked you.");
        } elseif ($follow_model_b_to_a == 2) {
            $is_private = 0;
        } else {
            $is_private = 1;
        }

        return view('www.user.view_user.following', compact('username', 'user_model', 'is_private'));
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
