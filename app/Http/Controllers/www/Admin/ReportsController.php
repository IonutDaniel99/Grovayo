<?php

namespace App\Http\Controllers\www\admin;

use App\Http\Controllers\Controller;
use App\Models\Likes;
use App\Models\Posts_Reports;
use App\Models\User_Posts;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\User;

class ReportsController extends Controller
{
    public function index()
    {
        $dashboard_data = Posts_Reports::orderBy('created_at', 'desc')->take(12)->get();
        return view("www.admin.reports", ['dashboard_data' => $dashboard_data]);
    }
}
