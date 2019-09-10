<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/uploading', 'VideoUploader@postUpload');
/// add attachment 
// add video record
// update meta data
// convert jobs