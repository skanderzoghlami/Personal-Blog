<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('zidarticle', 'manage@AddArticle')->middleware(['auth' ,'auth.admin']);;
Route::post('zidarticle', 'manage@AddArticle')->middleware(['auth' ,'auth.admin']);
Route::get('view', 'manage@view')->middleware(['auth' ]);
Route::get('read/{id}', 'manage@read');
Route::post('read/{id}', 'manage@read');

Route::post('delete', 'manage@delete')->middleware(['auth' ,'auth.admin']);
Route::get('adminarticles', 'manage@articlesAdmin')->middleware(['auth' ,'auth.admin']);
Route::get('adminusers', 'manage@usersAdmin')->middleware(['auth' ,'auth.admin']);
Route::get('admincomments', 'manage@commentsAdmin')->middleware(['auth' ,'auth.admin']);
Route::get('adminy', 'manage@Adminy')->middleware(['auth' ,'auth.admin']);
Route::post('addadmin', 'manage@addAdmin')->middleware(['auth' ,'auth.admin']);
Route::post('removeadmin', 'manage@removeAdmin')->middleware(['auth' ,'auth.admin']);