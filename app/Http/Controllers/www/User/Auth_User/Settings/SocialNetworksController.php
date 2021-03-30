<?php

namespace App\Http\Controllers\www\User\Auth_User\Settings;

use App\Http\Controllers\Controller;
use App\Models\User_About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SocialNetworksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->user_about = User_About::where('user_id', Auth::id())->first();
        $user_about = $this->user_about;
        return view('www.user.auth_user.settings.social-networks', compact('user_about'));
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = $request->all();

        $this->validate($request, [
            'social_webpage' => 'nullable|url',
            'social_facebook' => 'nullable|url',
            'social_twitter' => 'nullable|url',
            'social_youtube' => 'nullable|url',
            'social_instagram' => 'nullable|url',
            'social_linkedin' => 'nullable|url',
            'social_other1' => 'nullable|url',
            'social_other1' => 'nullable|url',
        ]);

        $user_about_model = User_About::where('user_id', Auth::id())->first();

        if ($user_about_model->social_webpage === NULL && isset($data['social_webpage'])) {
            $user_about_model->social_webpage = $data['social_webpage'];
        } elseif (is_null($data['social_webpage'])) {
            $user_about_model->social_webpage = NULL;
        }
        if ($user_about_model->social_facebook === NULL && isset($data['social_facebook'])) {
            $user_about_model->social_facebook = $data['social_facebook'];
        } elseif (is_null($data['social_facebook'])) {
            $user_about_model->social_facebook = NULL;
        }
        if ($user_about_model->social_twitter === NULL && isset($data['social_twitter'])) {
            $user_about_model->social_twitter = $data['social_twitter'];
        } elseif (is_null($data['social_twitter'])) {
            $user_about_model->social_twitter = NULL;
        }
        if ($user_about_model->social_youtube === NULL && isset($data['social_youtube'])) {
            $user_about_model->social_youtube = $data['social_youtube'];
        } elseif (is_null($data['social_youtube'])) {
            $user_about_model->social_youtube = NULL;
        }
        if ($user_about_model->social_instagram === NULL && isset($data['social_instagram'])) {
            $user_about_model->social_instagram = $data['social_instagram'];
        } elseif (is_null($data['social_instagram'])) {
            $user_about_model->social_instagram = NULL;
        }
        if ($user_about_model->social_linkedin === NULL && isset($data['social_linkedin'])) {
            $user_about_model->social_linkedin = $data['social_linkedin'];
        } elseif (is_null($data['social_linkedin'])) {
            $user_about_model->social_linkedin = NULL;
        }
        if ($user_about_model->social_other1 === NULL && isset($data['social_other1'])) {
            $user_about_model->social_other1 = $data['social_other1'];
        } elseif (is_null($data['social_other1'])) {
            $user_about_model->social_other1 = NULL;
        }
        if ($user_about_model->social_other2 === NULL && isset($data['social_other2'])) {
            $user_about_model->social_other2 = $data['social_other2'];
        } elseif (is_null($data['social_other2'])) {
            $user_about_model->social_other2 = NULL;
        }

        $user_about_model->save();

        return redirect()->route('Settings_Social_Networks_Index');
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
