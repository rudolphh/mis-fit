<?php

namespace App\Http\Controllers;

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
    public function index(Request $request){

    	$user = $request->user();
    	$content_title = $user->name."'s Friends";
    	$user->friends = $user->getFriends();
    	//return $user;
        return view('friends.index', compact('content_title', 'user'));

    }






    // shows all people that have sent you a friend request
    public function friendRequests(Request $request){
    	$user = $request->user();
    	$user->friendRequests = $user->getFriendRequests();
    	return $user;
    }



    // all friend requests pending approval whether sender or recipient
    public function pendingFriendships(Request $request){
    	$user = $request->user();
    	$user->pendingFriendships = $user->getPendingFriendships();
    	return $user;
    }


}
