<?php

namespace App\Http\Controllers\www\User\Auth_User\Settings;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\User_Notification_Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_model = User::where('id', Auth::id())->with('notifications')->first();
        if ($user_model['notifications'] == NULL) {
            $user_model->notifications()->create([
                'user_id' => Auth::id()
            ]);
        }
        $user_model = $user_model['notifications'];
        return view('www.user.auth_user.settings.notification-settings', compact('user_model'));
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
        $email_follow = isset($request->email_follow) ? 1 : 0;
        $email_like = isset($request->email_like) ? 1 : 0;
        $email_comment = isset($request->email_comment) ? 1 : 0;
        $email_update = isset($request->email_update) ? 1 : 0;
        $email_marketing = isset($request->email_marketing) ? 1 : 0;
        $hide_profile = isset($request->hide_profile) ? 1 : 0;
        $hide_ads = isset($request->hide_ads) ? 1 : 0;
        $hide_alerts = isset($request->hide_alerts) ? 1 : 0;


        User_Notification_Settings::where('user_id', Auth::id())->update([
            'email_follow' => $email_follow,
            'email_like' => $email_like,
            'email_comment' => $email_comment,
            'email_update' => $email_update,
            'email_marketing' => $email_marketing,
            'hide_profile' => $hide_profile,
            'hide_ads' => $hide_ads,
            'hide_alerts' => $hide_alerts,
        ]);

        return back();
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
