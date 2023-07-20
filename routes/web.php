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

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/', 'AuthController@index')->name('home');
    Route::post('/register_post', 'AuthController@register_post')->name('register.post');
    Route::get('/login', 'AuthController@login')->name('login');
    Route::post('/login_post', 'AuthController@login_post')->name('login.post');
    Route::get('/qrcode', 'AuthController@qrcode')->name('qrcode');
    Route::get('/user_list', 'AuthController@user_list')->name('user_list');
    Route::get('/user_lists', 'AuthController@user_lists')->name('user_lists');
    Route::get('/logout', 'AuthController@logout')->name('logout');
});

 