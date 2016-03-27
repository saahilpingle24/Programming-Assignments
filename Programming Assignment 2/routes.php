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

//Assignment 1
// Route::get('/', function () {
//     return 'Hello from Saahil';
// });

//Assignment 2
Route::get('/', 'PageController@index');
Route::get('/greet/{name}', 'PageController@greet');
Route::get('/weather/{location}', 'WeatherController@getWeather');
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
    //
});