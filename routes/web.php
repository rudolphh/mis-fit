<?php


// Route::get('users', function () {
	
// $users = App\User::with('measurements')->get();

// return $users->toArray();

// });

// Route::get('/friend/requests', function(){
// $sender = App\User::find(23);
// $recipient = App\User::find(75);

// $sender->befriend($recipient);
// $recipient->acceptFriendRequest($sender);

// return $sender->getFriends();
// });



//Route::get('/', 'Guest\PagesController@index');
Route::get('/', function(){

	return view('demo');
});

Route::get('/measurements/serverSide', [
    'as'   => 'measurements.serverSide',
    'uses' => function () {
    	$user = auth()->user();

    	$measure_columns = $user->measurements()
    					->select([ 'created_at', 'weight', 'neck', 'waist', 'hip' ]);

        return Datatables::of($measure_columns)->make();
    }
]);


//////////////////////////////////  

Auth::routes();


Route::get('/home', 'User\DashboardController@index');

Route::get('/settings', 'User\SettingsController@settingsForm')->name('settings.show');
Route::post('/settings', 'User\SettingsController@updateSettings')->name('settings.update');

Route::resource('measurements', 'User\MeasurementsController');


///////////////  Friends routes

Route::get('/friends', 'FriendsController@index')->name('friends.index');

Route::get('/friends/requests', 'FriendsController@friendRequests')->name('friends.requests');
Route::get('/friends/pending', 'FriendsController@pendingFriendships')->name('friends.pending');