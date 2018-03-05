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

Route::get('/', 'PageController@welcome');

Route::get('/welcome', 'PageController@welcome');

Route::get('/about', 'PageController@about');

Route::get('/northcambridge', 'PageController@northcambridge');

Route::get('/montinola', 'PageController@montinola');

Route::get('/gallery', 'PageController@gallery');

Route::get('/contactus', 'PageController@contactus');

Route::get('/book', 'PageController@book');

