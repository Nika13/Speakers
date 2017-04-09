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

Route::auth();
Auth::routes();
 
Route::get('/', 'RoomController@getMain');
Route::get('/home', 'RoomController@getMain');
Route::get('/rooms', 'RoomController@getIndex');
Route::get('/profile', 'ProfileController@getIndex');
Route::get('/users', 'UserController@getUsers');
Route::get('/user/{id}', 'UserController@getIndex')->where('id','[0-9]');
Route::get('/room/{id}', 'RoomController@getNum')->where('id','[0-9]');
//Route::get('/logout', 'UserController@logout');

Route::post('/message/{id}','MessageController@postIndex')->where('id','[0-9]+');
Route::post('/addroom','RoomController@postIndex');
Route::post('/addprivateroom/{id}','RoomController@postPrivateRoom')->where('id','[0-9]+');
Route::post('/profile','ProfileController@postIndex');



//Route::get('/home', 'HomeController@index');
