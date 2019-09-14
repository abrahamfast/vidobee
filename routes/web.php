<?php

Route::get('/', 'PageController@getIndex');
Route::get('/signup', 'PageController@getIndex')->name('signup');
Route::get('/video/{id}', 'PageController@getVideoFrame');