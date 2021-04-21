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

Route::group(['middleware' => 'auth'], function(){
    Route::get('/', 'AdminController@viewfood')->name('food');
    Route::get('/createfood', 'AdminController@createfood')->name('createfood');
    Route::post('/storefood', 'AdminController@storefood')->name('storefood');
    Route::delete('/deletefood/{id}', 'AdminController@destroyfood')->name('destroyfood');
    Route::get('/viewfood/{id}', 'AdminController@viewdatafood')->name('viewfood');
    Route::get('/editfood/{id}', 'AdminController@editfood')->name('editfood');
    Route::patch('/updatefood/{id}', 'AdminController@updatefood')->name('updatefood');
    Route::get('/category', 'AdminController@viewcategory')->name('category');
    Route::get('/createcategory', 'AdminController@createcategory')->name('createcategory');
    Route::post('/storecategory', 'AdminController@storecategory')->name('storecategory');
    Route::delete('/deletecategory/{id}', 'AdminController@destroycategory')->name('destroycategory');
    Route::get('/viewcategory/{id}', 'AdminController@viewdatacategory')->name('viewcategory');
    Route::get('/editcategory/{id}', 'AdminController@editcategory')->name('editcategory');
    Route::patch('/updatecategory/{id}', 'AdminController@updatecategory')->name('updatecategory');
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

