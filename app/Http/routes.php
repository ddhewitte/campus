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

Route::get('/', 'HomeController@index');
Route::get('home/add_new', 'HomeController@add_new');
Route::get('home/{home}', 'HomeController@detail');
Route::post('home', 'HomeController@store'); //get form with post method