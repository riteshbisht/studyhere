<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------

| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/','HomeController@start');
Route::get('/home','HomeController@start');
Route::get('/dashboard','DashboardController@start');
Route::get('/fb-login','FbLoginController@handle');

 Route::controllers([
 	'auth' => 'Auth\AuthController',
 'password' => 'Auth\PasswordController',
 ]);
