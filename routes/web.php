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

  
  Route::get('create', 'Admin\CreateController@add');
  Route::post('create', 'Admin\CreateController@create');
  
  Route::get('english/index', 'Admin\EnglishController@index');
  Route::get('english/edit', 'Admin\EnglishController@edit');
  Route::get('english/delete', 'Admin\EnglishController@delete');
  
  Route::post('moviedetail', 'Admin\MovieController@moviedetail');
  
  
  Route::get('movies', 'Admin\MovieController@index');
  Route::post('index', 'Admin\MovieController@find');
  Route::get('find', 'Admin\MovieController@find');
  Route::get('search', 'Admin\MovieController@search');
  Route::get('news/delete', 'Admin\MovieController@delete');
 
  Route::get('test', 'Admin\TestController@test');
  
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
