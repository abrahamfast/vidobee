<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
	public function getIndex()
	{
		return view('index');
	}

	public function getVideoFrame($id)
	{
		return view('video_frame');
	}

	public function getVideo($id)
	{
		return $id;
	}
}
