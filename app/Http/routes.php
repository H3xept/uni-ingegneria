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

Route::get('/', ['as'=>'book.index','uses'=>'BookshelfController@index']);

Route::get('/home', ['as'=>'book.index','uses'=>'BookshelfController@index']);

Route::get('/book/create', ['as'=>'book.create','uses'=>'BookshelfController@create']);
Route::post('/book/create', ['as'=>'book.store','uses'=>'BookshelfController@store']);

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', ['as'=>'auth.postLogin','uses'=>'Auth\AuthController@postLogin']);
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('/book/show/{id}',['as'=>'book.show','uses'=>'BookshelfController@show']);