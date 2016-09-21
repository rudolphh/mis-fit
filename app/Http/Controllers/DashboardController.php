<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


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

            $update_message = 'Update your settings before continuing.';
            session()->flash('update_message', $update_message);

            return view ('forms.settings', compact('content_title', 'user'));
        }
        else { return view ('home', compact('content_title')); }

    }

}

