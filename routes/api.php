<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route:: post('login','AuthController@login');
Route:: post('register','AuthController@register');
Route::group(['middleware' => 'auth:api'], function(){
    Route::post('details', 'AuthController@details');
});

//route::post('/user','apiController@create');
route::get('/search','apiController@search');

// No middleware for admin here so i just placed it here until i know which middleware admin routes are added
route::get('/posts/pending-posts','PostsController@pendingPosts');

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

