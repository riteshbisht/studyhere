<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FbLoginController extends Controller {

	//handle the cookies after login with fb is clicked

	public function handle()
	{
		$fb = new Facebook\Facebook([
  'app_id' => '{app-id}',
  'app_secret' => '{app-secret}',
  'default_graph_version' => 'v2.2',
  ]);

$helper = $fb->getJavaScriptHelper();

try {
  $accessToken = $helper->getAccessToken();
	return $accessToken;

} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
return 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  return 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}
	}
}
