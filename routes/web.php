<?php


Route::get('landing', 'Controller@landing');
Route::get('upload', 'Controller@upload')->name('upload');

Route::get('/', 'PageController@getIndex')->name('home');
Route::get('/about', 'PageController@getAbout')->name('about');
Route::get('/contact', 'PageController@getContact')->name('contact');
Route::get('/signup', 'PageController@getIndex')->name('signup');
Route::get('/video/{id}', 'PageController@getVideoFrame');
Route::get('/video/{id}/embed', 'PageController@getVideoEmbed');