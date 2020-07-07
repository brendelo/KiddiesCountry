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






Route::get('/', 'IndexController@index');
Route::get('/about', 'AboutController@index');
Route::get('/teachers', 'TeachersController@index');
Route::get('/classes', 'ClassesController@index');
Route::get('/contact', 'ContactController@index');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


