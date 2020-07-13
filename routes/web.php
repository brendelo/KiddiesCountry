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
Route::get('/adminhome', 'AdminController@home');
Route::get('/admin', 'AdminController@admin');
Route::get('/indexform', 'AdminController@showindexform');
Route::get('/aboutform', 'AdminController@showaboutform');
Route::post('/aboutform/update', 'AboutController@update');
//Route::post('/indexform/update', 'AdminController@createindexform');







Route::get('/', 'IndexController@index');
Route::get('/store', 'IndexController@store');
Route::post('/indexform/update', 'IndexController@update');



Route::get('/about', 'AboutController@index');
Route::get('/teachers', 'TeachersController@index');
Route::get('/classes', 'ClassesController@index');
Route::get('/contact', 'ContactController@index');



Auth::routes();

Route::get('/home/{user}', 'HomeController@index')->name('home');


