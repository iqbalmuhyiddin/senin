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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', array(
	'as' 	=> 'form.index',
	'uses' 	=> 'PostController@index'
	));

// Route::get('/','PostController@index');

Route::get('form', array(
	'as' 	=> 'form.create',
	'uses' 	=> 'PostController@create'
	));

Route::post('form', array(
	'as' 	=> 'form.store',
	'uses' 	=> 'PostController@store'
	));

// 
Route::get('update/{id}',array(
	'as'	=> 'form.edit',
	'uses'	=> 'PostController@edit'
	));

Route::put('update/{id}', array(
	'as'	=> 'form.update',
	'uses'	=> 'PostController@update'
	));
Route::delete('delete/{id}',array(
	'as'	=> 'form.delete',
	'uses'	=> 'PostController@destroy'));

Route::resource('perpus','PerpusController');