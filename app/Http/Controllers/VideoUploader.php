<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dilab\Network\SimpleRequest;
use Dilab\Network\SimpleResponse;
use Dilab\Resumable;

class VideoUploader extends Controller
{
    public function postUpload(Request $req)
    {
        $request = new SimpleRequest();
        $response = new SimpleResponse();
        $resumable = new Resumable($request, $response);
        $resumable->tempFolder = getenv('TMP_FOLDER');
        $resumable->uploadFolder = getenv('STORE_FOLDER');
        $resumable->process();
    }
}
