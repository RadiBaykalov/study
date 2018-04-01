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


Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();


Route::get('/blog', 'PostController@index')->name('blog');
Route::get('/blog/create', 'PostController@create');
Route::delete('/blog/{post}', 'PostController@destroy');
Route::get('/blog/{post}', 'PostController@show');
Route::post('/blog', 'PostController@store');
Route::get('/blog/{post}/edit', 'PostController@edit');
Route::put('/blog/{post}', 'PostController@update');
Route::post('/blog/{post}/comments', 'CommentController@store'); // can not be called with action() ?

Route::get('/blog/tags/{tag}', 'TagController@index');


// no user controller
Route::get('/user/{user}', function($user_id) {
	return view('layouts.user', ['user' => \App\User::find($user_id)]);
});



