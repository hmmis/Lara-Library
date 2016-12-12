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



Route::get('/', 'BookStoreController@index');

Route::get('add', 'BookStoreController@addBook');
Route::post('add', 'BookStoreController@processAddBook');

Route::get('delete/{id}', 'BookStoreController@deleteBook');

