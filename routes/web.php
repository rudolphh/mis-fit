<?php


// Route::get('users', function () {
	
// $users = App\User::with('measurements')->get();

// return $users->toArray();

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

