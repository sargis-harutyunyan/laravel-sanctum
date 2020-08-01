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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/create-token', 'HomeController@createNewToken')->name('create-token');
Route::post('/install-old-token', 'HomeController@installOldToken')->name('install-old-token');
Route::get('/api-login', 'Api\LoginController@index')->name('api-login-show');
