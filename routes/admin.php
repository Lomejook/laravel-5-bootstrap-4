<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['domain' => 'admin.' . env('DOMAIN_ROUTE')], function () {
	Route::group(['middleware' => 'auth'], function () {
		Route::get('/' , ['uses' => 'AdminController@index', 'as' => 'admin']);
	});

	Route::get('/login', ['uses' => 'Auth\LoginController@showLoginForm', 'as' => 'login']);
	Route::post('/login', ['uses' => 'Auth\LoginController@login', 'as' => 'login']);
	Route::post('/logout', ['uses' => 'Auth\LoginController@logout', 'as' => 'logout']);
});