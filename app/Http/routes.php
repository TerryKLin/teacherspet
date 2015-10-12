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
    return view('pages.home');
});

// Auth
Route::get('register', array('uses' => 'Auth\AuthController@getRegister'));
Route::post('register', array('uses' => 'Auth\AuthController@postRegister'));
Route::get('login', array('uses' => 'Auth\AuthController@getLogin'));
Route::post('login', array('uses' => 'Auth\AuthController@postLogin'));
Route::get('logout', array('uses' => 'Auth\AuthController@getLogout'));

Route::controllers([
   'password' => 'Auth\PasswordController',
]);