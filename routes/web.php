
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




//Admin Routes
Route::group(['middleware' => ['role:SuperAdmin|Admin']], function () {
    Route::get('/admin/home', 'Admin\AdminController@index')->name('admin.home');
    Route::get('/admin/posts', 'Admin\AdminController@postGet')->name('admin.posts');
    Route::post('approve-post/{id}', 'Admin\AdminController@approve');
    Route::post('unapprove-post/{id}', 'Admin\AdminController@Unapprove');
    Route::post('delete-temporary-post/{id}', 'Admin\AdminController@deleteTemporary');
    Route::post('delete-permanently-post/{id}', 'Admin\AdminController@deletePermanently');
    Route::post('delete-restore-post/{id}', 'Admin\AdminController@restore');
});
