<?php


// Route::get('users', function () {
	
// $users = App\User::with('measurements')->get();

// return $users->toArray();

// });



/*
|--------------------------------------------------------------------------
| Static Page Routes
|--------------------------------------------------------------------------
|
| These routes are for informational pages and links (recommended reading).
|
*/

Route::get('/', 'PagesController@index');


/*
|--------------------------------------------------------------------------
| Dynamic (Guest && Authenticated) User Application Routes
|--------------------------------------------------------------------------
|
| These routes are for the user application only
|
*/

Auth::routes();

Route::get('/home', 'DashboardController@index');

// 
Route::get('/settings', 'SettingsController@settingsForm')->name('settings.show');
Route::post('/settings', 'SettingsController@updateSettings')->name('settings.update');


Route::resource('measurements', 'MeasurementsController');
