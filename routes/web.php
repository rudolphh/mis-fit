<?php

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


Route::get('/settings', 'ProfileController@settingsForm');
Route::post('/settings', 'ProfileController@updateSettings');


Route::resource('measurements', 'MeasurementController');
