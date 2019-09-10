<?php

Route::get('/', 'PageController@getIndex');
Route::get('/video/{id}', 'PageController@getVideoFrame');