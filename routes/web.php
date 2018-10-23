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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'PublicController@index');
Route::get('/public', 'PublicController@index');
Route::get('/books', 'BookController@index');
Route::get('/book/create', 'BookController@create');
Route::post('/book', 'BookController@store');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');



Route::get('/private', 'PrivateController@index');
Route::get('/private/show', 'PrivateController@show');
