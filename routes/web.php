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

Route::get(
    '/quotes',
    'QuoteController@index'
)->name('quotes.index');
// ->middleware('auth');
// php artisan serve
Route::get('/quotes/create', 'QuoteController@create')->name('quotes.create');
Route::post(
    '/quotes',
    'QuoteController@store'
)->name('quotes.store');
Route::get('/quotes/{id}', 'QuoteController@show')->name('quotes.show');
// ->middleware('auth');
Route::get('/quotes/{id}/edit', 'QuoteController@edit')->name('quotes.edit');
Route::post('/quotes/update', 'QuoteController@update')->name('quotes.update');
Route::delete('/quotes/{id}', 'QuoteController@destroy')->name('quotes.destroy');
// ->middleware('auth');



// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');