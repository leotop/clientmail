<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::post('/', 'Auth\AuthController@postLogin');
    Route::get('register', 'PageController@register');
    Route::post('auth/register', 'Auth\AuthController@postRegister');
    Route::get('logout', 'Auth\AuthController@getLogout');

    Route::get('/', 'PageController@index');
    Route::get('home', 'UserController@home');
    Route::post('add-client', 'UserController@add_client');
    Route::post('send-mail', 'UserController@send_mail');
    Route::post('search-client', 'UserController@search_client');

    Route::get('test', 'PageController@test');
    Route::get('test2', 'PageController@test2');
});
    Route::post('upload-image', ['as'=>'upload-image', 'uses'=>'PageController@uploadImage']);
    Route::get('browse-image', ['as' => 'browse-image', 'uses' => 'PageController@browseImage']);