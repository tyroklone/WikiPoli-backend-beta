
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
     return view('web.index');
 });
 Route::get('/posts', 'Web\WebController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/create-post', 'Post\PostController@index');
Route::post('/create-post', 'Post\PostController@create');
Route::post('/save-draft', 'Post\PostController@draft');
