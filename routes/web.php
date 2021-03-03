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

// PageController per controllare le pagine del sito
Route::get('/', 'PageController@index')->name('homepage');
Route::get('/characters', 'PageController@characters')->name('characters');
Route::get('/movies', 'PageController@movies')->name('movies');
Route::get('/tv', 'PageController@tv')->name('tv');
Route::get('/games', 'PageController@games')->name('games');
Route::get('/videos', 'PageController@videos')->name('videos');
Route::get('/news', 'PageController@news')->name('news');
Route::get('/shop', 'PageController@shop')->name('shop');

// ComicController per controllare la pagina relativa ai comics, la route get e le relative route resources.
Route::get('comics', 'ComicController@index')->name('comics-home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
