<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class DashboardController extends Controller
{
    /** 
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $content_title = 'Dashboard';
        $user = $request->user();

        if(is_null($user->height)){

            // redirect to settings to initialize them
            return redirect()->route('settings.show');
        }
        // otherwise settings have been set, and the user can move on
        else { return view ('app', compact('content_title')); }
    }

}

