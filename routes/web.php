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
Route::view('/login', 'auth.login');
Route::view('/test', 'test');
Route::view('/product/detail', 'product.product-detail')->name('product.detail');
Route::view('/product/category', 'product.product-category')->name('product.category');
Route::view('/user', 'user.pengaturan');
Route::view('/user/chat', 'user.chat');
Route::view('/user/diskusi', 'user.diskusi');
Route::view('/user/wishlist', 'user.wishlist');
