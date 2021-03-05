<?php

namespace App\Http\Controllers\www\User\Auth_User\Settings;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\User_Follow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_about_model = User::where('id', Auth::id())->first();
        return view("www.user.auth_user.settings.profile", compact('user_about_model'));
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
    public function update(Request $request)
    {
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


    public function setProfileImage(Request $request)
    {
        $user_about_model = User::where('id', Auth::id())->first();;

        $this->validate($request, [
            'profile_image' => ['required', 'image', 'max:4096', 'dimensions:min_width=150,min_height=150'],
        ]);


        $imageName = $user_about_model->username . '-profile.' . $request->file('profile_image')->getClientOriginalExtension();
        $request->file('profile_image')->move(public_path('storage/users/' . $user_about_model->username . '/profile-photos'), $imageName);
        $user_about_model->profile_photo_path = 'storage/users/' . $user_about_model->username . '/profile-photos/' . $imageName;
        $user_about_model->save();

        return back();
    }


    public function setBackgroundImage(Request $request)
    {
        $user_about_model = User::where('id', Auth::id())->first();;

        $this->validate($request, [
            'background_image' => ['required', 'image', 'max:4096', 'dimensions:min_width=1000,min_height=300'],
        ]);


        $imageName = $user_about_model->username . '-bg.' . $request->file('background_image')->getClientOriginalExtension();
        $request->file('background_image')->move(public_path('storage/users/' . $user_about_model->username . '/background-photos'), $imageName);
        $user_about_model->background_image_url = 'storage/users/' . $user_about_model->username . '/background-photos/' . $imageName;
        $user_about_model->save();

        return back();
    }

    public function setProfileVisibility()
    {
        $auth_id = Auth::id();
        $user_model = User::where('id', $auth_id)->first();
        if ($user_model->is_private == 0) {

            $user_model->is_private = 1;
            $user_model->save();

            return back();
        } else {
            User_Follow::where("user_followed_id", $auth_id)->update([
                'user_follow_status' => 0,
                'user_action_id' => $auth_id,
                'updated_at' => now()
            ]);
            $user_model->is_private = 0;
            $user_model->save();
            return back();
        }
    }
}
