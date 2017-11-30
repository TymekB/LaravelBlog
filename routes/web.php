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

Route::get('/services', 'PagesController@services');
Route::get('/contact', 'PagesController@contact');

Route::get('/', 'PostsController@index');
Route::get('/post/create', 'PostsController@create');
Route::get('/post/{id}', 'PostsController@show');
Route::get('/post/delete/{id}', 'PostsController@destroy');
Route::get('/post/edit/{id}', 'PostsController@edit');
Route::post('/post/create', 'PostsController@store');
Route::post('/post/edit/{id}', 'PostsController@update');

Route::get('/comment/delete/{id}', 'CommentsController@destroy');
Route::post('/post/{id}', 'CommentsController@store');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
