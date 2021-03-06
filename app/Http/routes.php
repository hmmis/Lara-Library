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
use App\Http\Middleware\CheckUsers;

Route::get('/', 'ProfileController@Login');
Route::post('/', 'ProfileController@processLogin');

Route::get('LogOut', 'ProfileController@LogOut');


Route::group(['middleware' => [CheckUsers::class]], function () {

	Route::get('home', 'BookStoreController@index');
    Route::get('add', 'BookStoreController@addBook');
	Route::post('add', 'BookStoreController@processAddBook');

	Route::get('edit/{id}', 'BookStoreController@editBook');
	Route::post('edit/{id}', 'BookStoreController@processEditBook');

	Route::get('delete/{id}', 'BookStoreController@deleteBook');

	Route::get('suggestion/{hint}', 'BookStoreController@showSuggestion');
});

