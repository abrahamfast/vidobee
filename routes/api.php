<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('video/{id}', 'ApiController@getVideo');

Route::post('uploading', 'VideoUploader@postUpload');
Route::post('attachment', 'ApiController@attachment');
Route::post('attachment/update', 'ApiController@update');
/// add attachment 
// add video record
// update meta data
// convert jobs