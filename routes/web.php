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

Route::group(['prefix' => parseLocale(),
    'as' => 'l.'], function () {

    //Auth::routes();
    // Página inicial
    Route::get('/', 'WelcomeController@home')
        ->name('home');

    Route::get('/contact', 'WelcomeController@contact')
        ->name('contact');
    Route::post('/contact', 'WelcomeController@postContact')
        ->name('postContact');

});
