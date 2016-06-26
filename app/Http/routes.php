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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'backend'], function () {
	Route::get('/', ['as' => 'backend', function () {
		return view('backend.home');
	}]);

	// Testing ... Don't delete now!
	Route::get('/oneone', ['as' => 'backend.oneone', function () {
		return view('backend.oneone');
	}]);
});