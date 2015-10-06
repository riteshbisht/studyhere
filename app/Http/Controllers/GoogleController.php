<?php

namespace App\Http\Controllers;

use Redirect;
use Socialize;
use App;
use Illuminate\Support\Facades\Auth;

class GoogleController extends Controller
{
    // To redirect  google
      public function google_redirect()
      {
          return Socialize::with('google')->redirect();
      }
      // to get authenticate user data
      public function google()
      {
          $user = Socialize::with('google')->user();
        //$user = new App\User;
        //  dd($user);
$uid = $user->id;
          if ($uid == 0) {
              return Redirect::to('/')->with('message', 'There was an error');
          }

          $profile = App\Profile::whereUid($uid)->first();


          if (empty($profile)) {
              $newuser =new  App\User;
							$existinguser=App\User::whereemail($user->email)->first();
							if(empty($existinguser))
							{
              $newuser->name = $user->name;

              $newuser->email = $user->email;

              //$newuser->uid = $uid;
              $newuser->save();
             }
							$profile = new App\Profile();
            	$existingemail=App\Profile::whereemail($user->email)->first();
							if(empty($existingemail))
							{
								$profile->email = $user->email;
							}
							else
							{
								$profile->email=$existingemail->email;
							}
              $profile->photo = $user->avatar;

              $profile->uid = $uid;
              $profile->username = $user->name;

          }

          $profile->access_token = $user->token;
          $profile->save();

          $newuser = $profile->users;

        		Auth::login($newuser);
						return Redirect::to('/dashboard');
      }
}
