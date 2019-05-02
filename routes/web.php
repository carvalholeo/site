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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/contact', 'ContactController');
Route::resource('/portfolio', 'PortfolioController');
Route::prefix('/resume')->group(function() {
    Route::get('/','ResumeController@index');
    Route::get('/professional', 'ResumeController@professional');
    Route::get('/academic', 'ResumeController@academic');
    Route::get('/skills', 'ResumeController@skills');
});

