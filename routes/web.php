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
Route::get('/blog/create', 'PostController@create')->middleware('auth');
Route::get('/blog/{post}', 'PostController@show');
Route::post('/blog', 'PostController@store');

Route::post('/blog/{post}/comments', 'CommentController@store'); // can not be called with action() ?

// if a guest tries to post a comment, and they log in,
// they redirect back with GET -- fix it, don't need this route
Route::get('/blog/{post}/comments', 'PostController@show');


