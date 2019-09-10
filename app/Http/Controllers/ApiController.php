<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SnapyCloud\PhpApi\Client\SnapyClient;

class ApiController extends Controller
{
	public function api()
	{
		$client = new SnapyClient("https://api.platform.vidobee.com");
		$client->setApiKey('3f5748012c56385d8ff5be24976a8bcd');
		return $client;
		// $this->client->setSecretKey('1908a40926c27e383dd17b669aa0050c');
	}
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
}
