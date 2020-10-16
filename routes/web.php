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

Auth::routes();

Route::group(['prefix' => 'admin' ], function() {
  Route::get('index', 'Admin\MovieController@index');
  Route::post('index', 'Admin\MovieController@find');
  
  Route::get('create', 'Admin\CreateController@add');
  Route::post('create', 'Admin\CreateController@create');
  
  Route::get('english', 'Admin\EnglishController@next');
  Route::get('english/edit', 'Admin\EnglishController@edit');
  Route::get('english/delite', 'Admin\EnglishController@delete');
  Route::get('english', 'Admin\EnglishController@update');
  
  Route::get('movie/find', 'Admin\TestController@find');
  Route::get('news/delete', 'Admin\TestController@delete');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
