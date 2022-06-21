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

Route::view('/', 'dashboard');
Route::view('/test', 'test');
Route::view('/product', 'product.product-detail')->name('product');
Route::view('/user', 'user.pengaturan');
Route::view('/user/chat', 'user.chat');
Route::view('/user/diskusi', 'user.diskusi');
Route::view('/user/whislist', 'user.whistlist');
