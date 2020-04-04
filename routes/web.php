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

Route::get('/', 'ResumeController@homePage')->name('index');

Route::prefix('resume/')->group(function () {
    Route::get('', 'ResumeController@professional')->name('resume.professional');
    Route::get('download/', 'ResumeController@download')->name('resume.download');
});

Route::get('education/', 'ResumeController@education')->name('resume.education');
Route::get('volunteer/', 'ResumeController@volunteer')->name('resume.volunteer');
Route::get('certifications/', 'ResumeController@certifications')->name('resume.certifications');
Route::get('courses/', 'ResumeController@courses')->name('resume.courses');

Route::post('contact/', 'ContactController@send')->name('contact.send');

Route::get('social/', 'SocialController@index')->name('social.index');
Route::get('facebook/', 'SocialController@facebook')->name('social.facebook');
Route::get('youtube/', 'SocialController@youtube')->name('social.youtube');
Route::get('blog/', 'SocialController@blog')->name('social.blog');
Route::get('twitter/', 'SocialController@twitter')->name('social.twitter');
Route::get('instagram/', 'SocialController@instagram')->name('social.instagram');
Route::get('linkedin/', 'SocialController@linkedin')->name('social.linkedin');
Route::get('wordpress/', 'SocialController@wordpress')->name('social.wordpress');
Route::get('github/', 'SocialController@github')->name('social.github');
Route::get('pinterest/', 'SocialController@pinterest')->name('social.pinterest');
Route::get('telegram/', 'SocialController@telegram')->name('social.telegram');
Route::get('stackoverflow/', 'SocialController@stackoverflow')->name('social.stackoverflow');

Route::get('whatsapp/', 'SocialController@whatsapp')->name('social.whatsapp');

Route::post('repository/update/', 'InternalController@updateRepository')->name('github.update');

Route::get('sitemap/', 'InternalController@sitemap')->name('sitemap');
