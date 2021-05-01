<?php

namespace App\Http\Controllers\www\Admin;

use App\Http\Controllers\Controller;
use App\Http\Livewire\Www\User\AuthUser\Posts;
use App\Models\Likes;
use App\Models\Posts_Reports;
use App\Models\User_Posts;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dashboard_data = [
            'users_today' => User::whereDate('created_at', Carbon::today())->count(),
            'posts_today' => User_Posts::whereDate('created_at', Carbon::today())->count(),
            'likes_today' => Likes::whereDate('created_at', Carbon::today())->count(),
            'reports_today' => Posts_Reports::whereDate('created_at', Carbon::today())->count(),
            'latest_users' => User::orderBy('created_at', 'desc')->take(12)->get(),
            'latest_reports' => Posts_Reports::orderBy('created_at', 'desc')->take(12)->get(),
        ];
        return view('www.admin.dashboard', ['dashboard_data' => $dashboard_data]);
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
