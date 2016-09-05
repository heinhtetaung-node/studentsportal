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

// Route::get('/', function () {
//     return view('welcome');
// });

//user login ,logout,students register,
Route::get('/','Auth\AuthController@getlogin');
Route::post('/','Auth\AuthController@postlogin');
Route::get('auth/login','Auth\AuthController@getlogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::get('auth/logout', 'Auth\AuthController@getLogout');



Route::group(['prefix'=>'backend','middleware'=>'auth'], function () {
	// GET
	Route::get('/', ['as' => 'backend', 'uses' => 'Backend\BackendController@index']);
	Route::get('role','Backend\RoleController@index');


	Route::resource('blog','Backend\BlogsController');
	Route::resource('course','Backend\CoursesController');
	Route::resource('student', 'Backend\StudentsController');
	
	// POST
	Route::post('blog/ajax','Backend\BlogsController@listing_access');
	Route::post('blog/newpost','Backend\BlogsController@listing_newpost');
	Route::post('blog/updated','Backend\BlogsController@update_newpost');
	
	
	
	
});