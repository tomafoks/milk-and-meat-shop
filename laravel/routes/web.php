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
Route::get('/events', 'front\IndexController@events')->name('events');
Route::get('/products', 'front\IndexController@products')->name('products');
Route::get('/services', 'front\IndexController@services')->name('services');
Route::get('/households', 'front\IndexController@households')->name('households');
Route::get('/shortCode', 'front\IndexController@shortCode')->name('shortCode');
Route::post('/checkout', 'front\IndexController@checkout')->name('checkout');
Route::post('/mail', 'front\IndexController@mail')->name('mail');
Route::get('/meet', 'front\IndexController@meet')->name('meet');
Route::get('/milk', 'front\IndexController@milk')->name('milk');


Route::get('/register', 'UserController@create')->name('register.create');
Route::post('/register', 'UserController@store')->name('register.store');
