<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use SnapyCloud\PhpApi\Client\SnapyClient;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function api()
	{
		$client = new SnapyClient(
			getenv('API_PATH')
		);

		$client->setApiKey(
			getenv('API_KEY')
		);

		return $client;
	}
}
