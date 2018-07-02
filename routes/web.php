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
//
// Route::get('/', 'pageController@getHome');
Route::get('/users', 'pageController@getUsers');
Route::get('/roles', 'pageController@getRoles');
//
// Route::get('/about', 'pageController@getAbout');
//
// Route::get('/contact', 'pageController@getContact');
//
// Route::get('/messages', 'MessagesController@getMessages');
//
// Route::post('/contact/submit', 'MessagesController@submit');

// Route::get('/home', 'PostController@index')->name('home');
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'PostController@index')->name('home');

Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');

Route::resource('posts', 'PostController');
