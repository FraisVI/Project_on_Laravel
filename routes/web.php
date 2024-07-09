<?php

use Illuminate\Support\Facades\Auth;
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

//Route for post
Route::group(['namespace' => 'App\Http\Controllers\Post'], (function () {
    Route::get('/posts', 'IndexController')->name('post.index');
    Route::get('posts/create', 'CreateController')->name('post.create');
    Route::post('posts', 'StoreController')->name('post.store');
    Route::get('posts/{post}', 'ShowController')->name('post.show');
    Route::patch('posts/{post}', 'UpdateController')->name('post.update');
    Route::get('posts/{post}/edit', 'EditController')->name('post.edit');
    Route::delete('posts/{post}', 'DestroyController')->name('post.destroy');
}));

//Route for product
Route::get('/product', 'App\Http\Controllers\ProductController@index')->name('product.index');
Route::get('/product.create', 'App\Http\Controllers\ProductController@create')->name('product.create');
Route::post('/product', 'App\Http\Controllers\ProductController@store')->name('product.store');
Route::get('/products/{product}', 'App\Http\Controllers\ProductController@show')->name('product.show');
Route::patch('/products/{product}', 'App\Http\Controllers\ProductController@update')->name('product.update');
Route::get('/products/{product}/edit', 'App\Http\Controllers\ProductController@edit')->name('product.edit');
Route::delete('/products/{product}', 'App\Http\Controllers\ProductController@destroy')->name('product.delete');

//Another route

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin', 'middleware' => 'admin'], (function () {
    Route::group(['namespace' => 'Post'], (function () {
        Route::get('/post', 'IndexController')->name('admin.post.index');
    }));
}));

Route::get('/sort', 'App\Http\Controllers\SortController@Sort');
Route::get('/first_or_create', 'App\Http\Controllers\PostController@firstOrCreate');
Route::get('/update_or_create', 'App\Http\Controllers\PostController@updateOrCreate');
Route::get('/main', 'App\Http\Controllers\MainController@index')->name('main.index');
Route::get('/contacts', 'App\Http\Controllers\ContactController@index')->name('contact.index');
Route::get('/about', 'App\Http\Controllers\AboutController@index')->name('about.index');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
