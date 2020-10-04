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
  Route::get('index', 'Admin\MovieController@index');
  Route::get('index', 'Admin\MovieController@find');
  
  Route::get('create', 'Admin\CreateController@add');
  Route::get('create', 'Admin\CreateController@create');
  
  Route::get('english', 'Admin\EnglishController@next');
  Route::get('english/edit', 'Admin\EnglishController@edit');
  Route::get('english/delite', 'Admin\EnglishController@delete');
  Route::get('english', 'Admin\EnglishController@update');
  
  Route::get('movie/find', 'Admin\TestController@find');
  Route::get('news/delete', 'Admin\TestController@delete');
});