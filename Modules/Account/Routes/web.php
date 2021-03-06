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

Route::prefix('account')->group(function() {
    Route::get('/', 'AccountController@index')->name('account');
    Route::post('/changename', 'AccountController@changename')->middleware('auth')->name('changename');
    Route::post('/changepassword', 'AccountController@changepassword')->middleware('auth')->name('password.change');
});
