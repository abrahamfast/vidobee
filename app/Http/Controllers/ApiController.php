<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{

	public function attachment(Request $req)
	{
		$data = $req->all();
		$attachment = $this->api()->request('post', 'Attachment', $data);
		return $this->api()->request('post', 'Video', [
			'name' => $attachment['name'],
			"proccess" => "None",
			"assignedUserId" => "1",
			"assignedUserName" => "Admin",
			'videoFileId' => $attachment['id'],
			'videoFileName' => $attachment['name']
		]);
	}

	public function update(Request $req)
	{

		$data = $req->all();

		return $this->api()->request('PUT', 'Video/' . $data['id'] , [
			'name' => $data['title'],
			'tags' => $data['tags'],
			'emailOwner' => $data['email'],
			'description' => $data['description']
		]);
	}
}
