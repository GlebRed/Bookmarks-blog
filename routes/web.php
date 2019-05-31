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

  $bookmarks = \App\Bookmark::all();

  return view('welcome')->with('bookmarks', $bookmarks);
});

Route::group(['middleware' => 'auth'], function () {

  Route::get('submit', 'BookmarkController@index');
  Route::post('submit', 'BookmarkController@store');
  Route::get('bookmark/{id}/edit', 'BookmarkController@edit');
  Route::post('bookmark/{id}/edit', 'BookmarkController@update');



});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
