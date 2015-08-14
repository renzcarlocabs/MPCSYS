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

Route::get('/', array('middleware' => 'auth', 'uses' => 'IndexController@index'));
Route::resource('/auth', 'AuthController', array('only' => array('index', 'store', 'destroy')));
Route::get('/auth/login', 'AuthController@index');
Route::post('/auth/login', 'AuthController@store');
Route::get('/auth/logout', 'AuthController@destroy');

Route::get('/adduser', array('middleware' => 'auth', 'uses' => 'AuthController@addform', 'as' => 'auth.addform'));
Route::post('/adduser', 'AddController@store');

Route::get('/home', array('middleware' => 'auth', 'uses' => 'HomeController@index', 'as' => 'home.index'));

Route::get('/view/users', array('middleware' => 'auth', 'uses' => 'ViewController@viewusers', 'as' => 'view.viewusers'));

Route::get('/user/profile', array('middleware' => 'auth', 'uses' => 'AuthController@profile'));
