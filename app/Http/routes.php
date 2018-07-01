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

Route::get('/', 'HomeController@index');//homepage
Route::get('home/pagination', 'HomeController@index_with_pagination');//homepage with pagination


Route::get('home/add_new', 'HomeController@add_new');//add new form
Route::get('home/{id}', 'HomeController@detail');//detail
Route::post('home', 'HomeController@store'); //add new process

Route::get('home/{id}/edit', 'HomeController@edit'); //edit form
Route::patch('home/{id}', 'HomeController@update'); //edit process

Route::get('home/{id}/hapus', 'HomeController@delete'); //hapus