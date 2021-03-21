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

Route::get('/', 'App\Http\Controllers\PostController@index');
Route::get('/posts/create', 'App\Http\Controllers\PostController@create');
Route::get('/posts/{post}', 'App\Http\Controllers\PostController@show');
Route::get('/posts/{post}/edit', 'App\Http\Controllers\PostController@edit');
Route::delete('/posts/{post}', 'App\Http\Controllers\PostController@delete');
Route::put('/posts/{post}', 'App\Http\Controllers\PostController@update');
Route::post('/posts', 'App\Http\Controllers\PostController@store');