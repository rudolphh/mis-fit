<?php


// Route::get('users', function () {
	
// $users = App\User::with('measurements')->get();

// return $users->toArray();

// });



Route::get('/', 'Guest\PagesController@index');


Auth::routes();


Route::get('/home', 'User\DashboardController@index');

Route::get('/settings', 'User\SettingsController@settingsForm')->name('settings.show');
Route::post('/settings', 'User\SettingsController@updateSettings')->name('settings.update');

Route::resource('measurements', 'User\MeasurementsController');

