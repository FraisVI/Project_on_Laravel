<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/create', 'App\Http\Controllers\PostController@create');
Route::get('/posts/update', 'App\Http\Controllers\PostController@update');
Route::get('/posts/delete', 'App\Http\Controllers\PostController@delete');
Route::get('/sort', 'App\Http\Controllers\SortController@Sort');
Route::get('/first_or_create', 'App\Http\Controllers\PostController@firstOrCreate');
Route::get('/update_or_create', 'App\Http\Controllers\PostController@updateOrCreate');

Route::get('/posts', 'App\Http\Controllers\PostController@indexPost')->name('post.index');
Route::get('/main', 'App\Http\Controllers\MainController@index')->name('main.index');
Route::get('/contacts', 'App\Http\Controllers\ContactController@index')->name('contact.index');
Route::get('/about', 'App\Http\Controllers\AboutController@index')->name('about.index');
