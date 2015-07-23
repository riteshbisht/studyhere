<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FbLoginController extends Controller {

	//handle the cookies after login with fb is clicked

	public function handle()
	{
		$fb = App::make('SammyK\LaravelFacebookSdk\LaravelFacebookSdk');
		try {
	        $token = $fb->getJavaScriptHelper()->getAccessToken();
					return $token;
	    } catch (Facebook\Exceptions\FacebookSDKException $e) {
	        // Failed to obtain access token
	        dd($e->getMessage());
	    }

	    // $token will be null if no cookie was set or no OAuth data
	    // was found in the cookie's signed request data
	    if (! $token) {
	        // User hasn't logged in using the JS SDK yet
	    }
			return $token;
	}
}
