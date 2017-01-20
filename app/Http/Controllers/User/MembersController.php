<?php

namespace App\Http\Controllers\User;

use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;


class MembersController extends Controller
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
    public function index(Request $request){

        $content_title = "Members";
        $user = $request->user();
        $users = User::where('id', '!=', $user->id)->select([ 'name', 'created_at'])->get();
        return view('members.index', compact('content_title', 'user', 'users'));
    }

    public function ajax_index(Request $request){

        $user = $request->user();
        $users = User::where('id', '!=', $user->id)->select([ 'name', 'created_at'])->get();     
        return Datatables::of($users)->make();
    }

}