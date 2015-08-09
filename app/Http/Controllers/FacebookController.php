<?php namespace App\Http\Controllers;
session_start();
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Facebook\Facebook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\GraphUser;
use Facebook\FacebookRequestException;
use Facebook\FacebookRedirectLoginHelper;
use App;

class FacebookController extends Controller {

public function login()
{

	$fb = new Facebook([
  'app_id' => '709854915792963',
  'app_secret' => '74e61a2eaf730835d8b4b39ec3aede8e',
  'default_graph_version' => 'v2.2',
  ]);


	$helper = $fb->getRedirectLoginHelper();
$permissions = ['email', 'public_profile']; // optional
$loginUrl = $helper->getLoginUrl('http://studyhere-audiodict.rhcloud.com/login/fb/callback', $permissions);



	return Redirect::to($loginUrl);
}

public function loginCallback()
 {
$fb = new Facebook([
'app_id' => '709854915792963',
'app_secret' => '74e61a2eaf730835d8b4b39ec3aede8e',
'default_graph_version' => 'v2.2',
]);
$helper = $fb->getRedirectLoginHelper();
try {
  $accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

if (isset($accessToken)) {
  // Logged in!
  $access_token = (string) $accessToken;

  // Now you can redirect to another page and use the
  // access token from $_SESSION['facebook_access_token']
}
$response = $fb->get('/me?fields=id,name,email', $access_token);

	$me = $response->getGraphUser();
	$uid = $me['id'];
	//return $uid;

				if ($uid == 0) {
						return Redirect::to('/')->with('message', 'There was an error');
				}
	//return $user;
				$profile = App\Profile::whereUid($uid)->first();

				if (empty($profile)) {
						$user = new App\User;

						$user->name = $me['name'];
						$user->email = $me['email'];
						$user->uid=$uid;
						$user->save();


						$profile = new App\Profile();

						$profile->photo='https://graph.facebook.com/'.$me['id'].'/picture?type=large';
						$user->email = $me['email'];
						$profile->uid = $uid;
						$profile->username = $user['name'];
						$profile = $user->profiles()->save($profile);
				}

				$profile->access_token = $access_token;
				$profile->save();

				$user = $profile->users;
			Auth::login($user);





return Redirect::to('/dashboard');
}



}
