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

Route::get('/', 'PortfolioController@index')->name('index');

Route::resource('/contact', 'ContactController');
Route::prefix('/resume')->group(function () {
    Route::get('/', 'ResumeController@index')->name('resume.index');
    Route::get('/professional', 'ResumeController@professional')->name('resume.professional');
    Route::get('/academic', 'ResumeController@academic')->name('resume.academic');
    Route::get('/hobbies', 'ResumeController@hobbies')->name('resume.hobbies');
    Route::get('/courses', 'ResumeController@courses')->name('resume.courses');
    Route::get('/bio', 'ResumeController@bio')->name('resume.bio');
    Route::get('/skills', 'ResumeController@skills')->name('resume.skills');
});

Route::get('/social', 'SocialController@index')->name('social.index');
Route::get('/facebook', 'SocialController@index')->name('social.facebook');
Route::get('/blog', 'SocialController@blog')->name('social.blog');
Route::get('/twitter', 'SocialController@twitter')->name('social.twitter');
Route::get('/instagram', 'SocialController@instagram')->name('social.instagram');
Route::get('/linkedin', 'SocialController@linkedin')->name('social.linkedin');
Route::get('/wordpress', 'SocialController@wordpress')->name('social.wordpress');
Route::get('/github', 'SocialController@github')->name('social.github');
Route::get('/pinterest', 'SocialController@pinterest')->name('social.pinterest');
Route::get('/telegram', 'SocialController@telegram')->name('social.telegram');
Route::get('/stackoverflow', 'SocialController@stackoverflow')->name('social.stackoverflow');

Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');