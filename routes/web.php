<?php

use Illuminate\Support\Facades\Route;

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

// Pages List
Route::get('/', 'PagesController@index');                   // index
Route::get('/about', 'PagesController@about');              // about
Route::get('/services', 'PagesController@services');        // services

// user auth


// user auth
Route::get('/login', 'UserAuthController@login');
Route::get('/signup', 'UserAuthController@signup');


Route::resource('posts', 'PostsController');
