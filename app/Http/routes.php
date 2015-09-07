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
              // 'uses' => namespace\ImeControllera@akcija_na_tom_kontroleru
Route::get('/', ['uses' => '\Dirtsync\Http\Controllers\HomeController@index',
                'as' => 'home',]);
