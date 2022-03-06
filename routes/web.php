<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PostController;
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

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products', 'App\Http\Controllers\ProductController@index');
Route::get('products/{name}/{id}', 'App\Http\Controllers\ProductController@show')->where([
    'name' => '[a-z]+',
    'id' => '[0-9]+'
]);
Route::get('/posts', 'App\Http\Controllers\PostController@index');