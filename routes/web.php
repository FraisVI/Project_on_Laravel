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

Route::get('my_age', 'App\Http\Controllers\MyAgeController@indexAge');

Route::get('my_cat', 'App\Http\Controllers\MyCatController@indexCat');

Route::get('my_city', 'App\Http\Controllers\MyCityController@indexCity');

Route::get('my_eyes', 'App\Http\Controllers\MyEyesController@indexEyes');

Route::get('my_girlfriend', 'App\Http\Controllers\MyGirlfriendController@indexGirlfriend');

Route::get('my_hobby', 'App\Http\Controllers\MyHobbyController@indexHobby');

Route::get('my_name', 'App\Http\Controllers\MyNameController@indexName');

Route::get('my_work', 'App\Http\Controllers\MyWorkController@indexWork');

Route::get('/posts', 'App\Http\Controllers\PostController@indexPost');
