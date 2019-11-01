
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

// Route::get('/', function () {
//     return view('web.index');
// });
Route::post('user/register', 'User\UserController@register');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('index');
});
Route::get('/post', 'PostsController@index');
Route::get('/post/{id}', 'PostsController@show')->name('post.show');
Route::post('/comments/{id}', 'CommentsController@store');


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::group(['middleware' => ['auth']], function () {
//      Route::get('/user', 'AuthControllers');
// });


