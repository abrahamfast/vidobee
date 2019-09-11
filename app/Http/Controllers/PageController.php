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
		// $result = $this->api()->request('get', 'Video/' . $id);

		return view('video_frame', [
			// 'video' => $result
		]);
	}

	public function getVideo($id)
	{
		return $id;
	}
}
