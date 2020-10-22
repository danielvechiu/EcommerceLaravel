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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/shop', 'ProductsController@index')->name('products.index');
Route::get('/shop/{slug}', 'ProductsController@show')->name('products.show');
Route::get('/search', 'ProductsController@search')->name('products.search');

Route::get('/new-collection', 'NewCollectionController@index')->name('newcollection.index');

Route::get('/favourites', 'FavouritesController@index')->name('favourites.index');
Route::post('/favourites/{product}', 'FavouritesController@store')->name('favourites.store');
Route::delete('/favourites/{id}', 'FavouritesController@destroy')->name('favourites.destroy');

Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::patch('/cart/{product}', 'CartController@update')->name('cart.update');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
