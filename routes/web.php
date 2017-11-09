<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/msg/{id}', 'MessageController@show');

Route::get('/new', function() {
	return view('new');	
});

Route::post('message.create', 'MessageController@create');

// Route::get('new', 
//   ['as' => 'message', 'uses' => 'MessageController@create']);
// Route::post('contact', 
//   ['as' => 'message_store', 'uses' => 'MessageController@store']);

