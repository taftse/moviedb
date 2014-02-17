<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return 'hello';
});


/**
 * Movie
 */
Route::group(['prefix' => 'movie'], function() {

	Route::get('index', [
		'as'   => 'movie.index',
		'uses' => 'MovieController@index'
	]);

	Route::get('{id}', [
		'as'   => 'movie.show',
		'uses' => 'MovieController@show'
	]);

	Route::get('create', [
		'as'   => 'movie.create',
		'uses' => 'MovieController@create'
	]);

	Route::post('store', [
		'as'   => 'movie.store',
		'uses' => 'MovieController@store'
	]);

	Route::get('{id}/edit', [
		'as'   => 'movie.edit',
		'uses' => 'MovieController@edit'
	]);

	Route::post('{id}/update', [
		'as'   => 'movie.update',
		'uses' => 'MovieController@update'
	]);

	Route::post('{id}/destroy', [
		'as'   => 'movie.destroy',
		'uses' => 'MovieController@destroy'
	]);

});

/**
 * Actor
 */
Route::group(['prefix' => 'actor'], function() {

	Route::get('index', [
		'as'   => 'actor.index',
		'uses' => 'ActorController@index'
	]);

	Route::get('{id}', [
		'as'   => 'actor.show',
		'uses' => 'ActorController@show'
	]);

	Route::get('create', [
		'as'   => 'actor.create',
		'uses' => 'ActorController@create'
	]);

	Route::post('store', [
		'as'   => 'actor.store',
		'uses' => 'ActorController@store'
	]);

	Route::get('{id}/edit', [
		'as'   => 'actor.edit',
		'uses' => 'ActorController@edit'
	]);

	Route::post('{id}/update', [
		'as'   => 'actor.update',
		'uses' => 'ActorController@update'
	]);

	Route::post('{id}/destroy', [
		'as'   => 'actor.destroy',
		'uses' => 'ActorController@destroy'
	]);

});

/**
 * Genre
 */
Route::group(['prefix' => 'genre'], function() {

	Route::get('index', [
		'as'   => 'genre.index',
		'uses' => 'GenreController@index'
	]);

	Route::get('{id}', [
		'as'   => 'genre.show',
		'uses' => 'GenreController@show'
	]);

	Route::get('create', [
		'as'   => 'genre.create',
		'uses' => 'GenreController@create'
	]);

	Route::post('store', [
		'as'   => 'genre.store',
		'uses' => 'GenreController@store'
	]);

	Route::get('{id}/edit', [
		'as'   => 'genre.edit',
		'uses' => 'GenreController@edit'
	]);

	Route::post('{id}/update', [
		'as'   => 'genre.update',
		'uses' => 'GenreController@update'
	]);

	Route::post('{id}/destroy', [
		'as'   => 'genre.destroy',
		'uses' => 'GenreController@destroy'
	]);

});