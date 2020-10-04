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
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
  Route::get('/', 'Admin\MovieController@index');
  Route::get('create', 'Admin\NewsController@add');
  Route::get('create', 'Admin\CreateController@create');
  
  Route::get('english', 'Admin\EnglishController@next');
  Route::get('englidsh', 'Admin\EnglishController@edit');
  Route::get('englidsh', 'Admin\EnglishController@delete');
  Route::get('englidsh', 'Admin\EnglishController@update');
  
  Route::get('news/edit', 'Admin\TestController@update');
  Route::get('news/delete', 'Admin\TestController@delete');
});