<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*Route::get('/', function (){
	return view('index');

});
Route::get('/about', function (){
	return view('about');
});
*/
/*Route::get('/dashboard', function (){
	return view('dashboard');
});
*/





Route::group(['middleware' => ['web']], function () {
Route::get('dashboard', ['middleware' => 'auth', 'uses' => 'dashboardController@create']);


Route::get('/', 'homeController@create');
Route::get('/about', 'myprofileController@create');
Route::get('/events', 'notificationsController@create');
Route::get('/login', 'homeController@loginUser');
Route::get('/register', 'homeController@registerUser');
});
