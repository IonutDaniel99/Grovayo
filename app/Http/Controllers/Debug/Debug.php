<?php

namespace App\Http\Controllers\Debug;

use App\Http\Controllers\Controller;

/**
 * Used in generaly to debug things before implementation.
 */
class Debug extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        toastr()->info('Are you the 6 fingered man?');
        return view('errors.debug');
    }
}
