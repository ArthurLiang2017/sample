<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');

Route::get('/signup', 'UsersController@create')->name('signup');
Route::resource('users', 'UsersController');

Route::get('login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@store')->name('login');
Route::delete('logout', 'SessionsController@destroy')->name('logout');

Route::get('signup/confirm/{token}', 'UsersController@confirmEmail')->name('confirm_email');

Route::get('password/email', 'Auth\ResetPasswordController@getEmail')->name('password.reset');
Route::post('password/email', 'Auth\ResetPasswordController@postEmail')->name('password.reset');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@getReset')->name('password.edit');
Route::post('password/reset', 'Auth\ResetPasswordController@postReset')->name('password.update');

/*Route::get('/', function () {
    return view('welcome');
});*/
