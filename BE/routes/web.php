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

Route::get('/', 'AdminController@viewfood')->name('food');
Route::get('/createfood', 'AdminController@createfood')->name('createfood');
Route::post('/storefood', 'AdminController@store')->name('storefood');
Route::delete('/deletefood/{id}', 'AdminController@destroyfood')->name('destroyfood');
Route::get('/viewfood/{id}', 'AdminController@viewdata')->name('viewfood');
Route::get('/editfood/{id}', 'AdminController@edit')->name('editfood');
Route::patch('/updatefood/{id}', 'AdminController@updatefood')->name('updatefood');