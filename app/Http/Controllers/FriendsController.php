<?php

namespace App\Http\Controllers;

//use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;


class FriendsController extends Controller
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
     * Show all friends
     *
     * @return void
     */
    public function index(){


    	return auth()->user()->friends()->get();

    }
}
