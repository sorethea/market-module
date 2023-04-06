<?php

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

Route::prefix('market')->group(function() {
    Route::get('/', 'MarketController@index')->name('market.index');
    Route::get('/market/logout','AuthController@logout')->name('market.logout');
    Route::get('/market/login','AuthController@login')->name('market.login');
});
