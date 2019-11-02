
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

//Route::get('/posts', 'Web\WebController@index');
Route::get('/posts', 'PostsController@index');


Route::get('/post/{id}', 'PostsController@show')->name('post.show');
Route::post('/comments/{id}', 'CommentsController@store');


// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
// Route::group(['middleware' => ['auth']], function () {
//      Route::get('/user', 'AuthControllers');
// });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//user creae post
Route::get('/create-post', 'Post\PostController@index');
Route::post('/create-post', 'Post\PostController@create');
Route::post('/draf-post', 'Post\PostController@draft');




//Admin Routes
Route::group(['middleware' => ['role:SuperAdmin|Admin']], function () {
    Route::get('/admin/home', 'Admin\AdminController@index')->name('admin.home');
    //posts
    Route::get('/admin/posts', 'Admin\AdminController@postGet')->name('admin.posts');
    Route::post('approve-post/{id}', 'Admin\AdminController@approve');
    Route::post('unapprove-post/{id}', 'Admin\AdminController@Unapprove');
    Route::post('delete-temporary-post/{id}', 'Admin\AdminController@deleteTemporary');
    Route::post('delete-permanently-post/{id}', 'Admin\AdminController@deletePermanently');
    Route::post('delete-restore-post/{id}', 'Admin\AdminController@restore');

    //users
    Route::get('/admin/users', 'Admin\AdminController@userGet')->name('admin.users');
    Route::post('block-user/{id}', 'Admin\AdminController@block');
    Route::post('unblock-user/{id}', 'Admin\AdminController@Unblock');
    Route::post('delete-temporary-user/{id}', 'Admin\AdminController@deleteTemporaryUser');
    Route::post('delete-permanently-user/{id}', 'Admin\AdminController@deletePermanentlyUser');
    Route::post('restore-user/{id}', 'Admin\AdminController@restoreUser');
    Route::post('remove-admin/{id}', 'Admin\AdminController@removeAdmin');
    Route::post('remove-superadmin/{id}', 'Admin\AdminController@removeSuperAdmin');
    Route::post('make-admin/{id}', 'Admin\AdminController@makeAdmin');
    Route::post('make-superadmin/{id}', 'Admin\AdminController@makeSuperAdmin');
    //all-admins

    Route::get('/admin/all-admins', 'Admin\AdminController@adminGet')->name('admin.all-admins');
    //recent Activities
    Route::get('/admin/activities', 'Admin\AdminController@activity')->name('admin.activities');
    
    //politicians
    Route::get('/admin/politicians', 'Admin\AdminController@politicianGet')->name('admin.politicians');
     Route::post('add-politician', 'Admin\AdminController@addPolitician');
    
});
