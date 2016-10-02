<?php

namespace App\Http\Controllers\Guest;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PagesController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
          
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.welcome');
    }
}
