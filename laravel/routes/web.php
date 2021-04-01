<?php

use App\Http\Controllers\admin\IndexController;
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

// все остальное
Route::get('/', 'front\IndexController@index')->name('index');
Route::get('/faqs', 'front\IndexController@faqs')->name('faqs');
Route::get('/about', 'front\IndexController@about')->name('about');
Route::get('/events', 'front\IndexController@events')->name('events');
Route::get('/services', 'front\IndexController@services')->name('services');
Route::get('/households', 'front\IndexController@households')->name('households');
Route::get('/shortCode', 'front\IndexController@shortCode')->name('shortCode');
Route::post('/checkout', 'front\IndexController@checkout')->name('checkout');
Route::post('/mail', 'front\IndexController@mail')->name('mail');

// продукты
Route::get('/meet', 'front\ProductController@meet')->name('meet');
Route::get('/milk', 'front\ProductController@milk')->name('milk');
Route::get('/products', 'front\ProductController@index')->name('products');
Route::get('/article{slug}', 'front\ProductController@show')->name('single.product');

// корзина
Route::get('/basket/show', 'BasketController@index')->name('basket.index');
Route::get('/basket/checkout', 'BasketController@checkout')->name('basket.checkout');

Route::get('/logout', 'UserController@logout')->name('logout')->middleware('auth');

Route::group(['middleware' => 'guest'],
    function() {
        Route::get('/register', 'UserController@create')->name('register.create');
        Route::post('/register', 'UserController@store')->name('register.store');
        Route::get('/login', 'UserController@loginForm')->name('login.create');
        Route::post('/login', 'UserController@login')->name('login');
    });

// админка
Route::group(['prefix'=>'admin', 'middleware'=>'admin', 'namespace'=>'admin'],
    function() {
    Route::get('/', 'IndexController@index')->name('admin.index');
    Route::resource('/categories', 'CategoryController');
    Route::resource('/products', 'ProductController');
});
