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

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/', 'HomeController@index')->name('home');

Route::get('/posts/{id}', ['as'=>'home.post', 'uses'=>'AdminPostsController@post']);


Route::group(['middleware'=>'admin'], function(){


    Route::get('/admin', 'AdminController@index');

    Route::resource('admin/users', 'AdminUsersController');

    Route::resource('admin/posts', 'AdminPostsController');

    Route::resource('admin/categories', 'AdminCategoryController');

    Route::resource('admin/media', 'AdminPhotoController');

    Route::resource('admin/comments/replies', 'CommentRepliesController');

    Route::resource('admin/comments', 'PostCommentsController');

});


Route::group(['middleware'=>'admin'], function(){

    Route::post('comment/reply', 'CommentRepliesController@createReply');

});
