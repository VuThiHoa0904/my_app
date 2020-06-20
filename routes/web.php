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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/trang-chu', function () {
//    return view('welcome');
//});

Auth::routes();

//FRONTEND

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/trang-chu', 'HomeController@index');
Route::get('/', 'HomeController@index');

//BACKEND - Admin

Route::get('/admin', 'AdminController@index');
Route::get('/dashboard', 'AdminController@show_dashboard');

