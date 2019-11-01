
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
 Route::get('/Terms', function () {
  return view('Terms-of-use');
});
Route::get('/PrivacyPolicy', function () {
  return view('privacypolicy');
});
Route::get('/About', function () {
  return view('about');
});
Route::get('/Careers', function () {
  return view('careers');
});
Route::get('/FAQs', function () {
  return view('FAQ');
});
Route::get('/Donation', function () {
  return view('donate_and_support_page');
});

 Route::get('/posts', 'Web\WebController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/create-post', 'Post\PostController@index');
Route::post('/create-post', 'Post\PostController@create');
Route::post('/save-draft', 'Post\PostController@draft');
