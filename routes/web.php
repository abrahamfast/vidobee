<?php

Route::get('/', 'PageController@getIndex')->name('home');
Route::get('/signup', 'PageController@getIndex')->name('signup');
Route::get('/video/{id}', 'PageController@getVideoFrame');