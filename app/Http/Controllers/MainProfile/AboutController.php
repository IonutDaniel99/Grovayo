<?php

namespace App\Http\Controllers\MainProfile;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\User_About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_about = User_About::where('id', Auth::id())->first();
        $user_about['user_country'] = Country::where('id', $user_about['user_country'])->pluck('name')->first();
        if ($user_about['birthday'] != NULL)
            $user_about['birthday'] = date('j F, Y', strtotime($user_about['birthday']));

        $this->isSocialPagesNull($user_about);
        $this->isFavouritesNull($user_about);
        return view('livewire.profile.about', compact('user_about'));
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
    }
}