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
})->name('index');

Route::resource('/contact', 'ContactController');
Route::prefix('/resume')->group(function() {
    Route::get('/','ResumeController@index')->name('resume.index');
    Route::get('/professional', 'ResumeController@professional')->name('resume.professional');
    Route::get('/academic', 'ResumeController@academic')->name('resume.academic');
    Route::get('/skills', 'ResumeController@skills')->name('resume.skills');
});

Route::prefix('/social')->group(function() {
    Route::get('/', 'SocialController@index')->name('social.index');
    Route::get('/blog', 'SocialController@blog')->name('social.blog');
});

Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');