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

Route::get('/', 'front\IndexController@index')->name('index');
Route::get('/faqs', 'front\IndexController@faqs')->name('faqs');
Route::get('/about', 'front\IndexController@about')->name('about');
Route::get('/meet', 'front\IndexController@meet')->name('meet');
Route::get('/milk', 'front\IndexController@milk')->name('milk');
