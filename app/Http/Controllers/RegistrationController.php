<?php namespace App\Http\Controllers;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Confirm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class RegistrationController extends Controller {


//confirm registrattion 
	public function confirm($confirmation_code)
    {
        if( ! $confirmation_code)
        {
            return $confirmation_code;
        }


        $user = Confirm::whereConfirmationCode($confirmation_code)->first();


        if ( ! $user)
        {
            return view("doverification")->with(["message"=>"your token is expired Register again!!!",'button_message'=>'Register','button_url'=>"/auth/Register/"]);
        }
				$newuser=new User;
				$newuser->email=$user->email;
				$newuser->name=$user->name;
				$newuser->password=$user->password;
				$newuser->save();

				//for login
				$newuser=User::find($user->email);
				Auth::login($newuser);

			$user->delete();
        // $user->confirmed = 1;
        // $user->confirmation_code = null;
        // $user->save();

       return Redirect::to('completeprofile');
    }



        $user = User::whereConfirmationCode($confirmation_code)->first();

        if ( ! $user)
        {
            return view("doverification")->with(['message'=>'you are  already registered user please login',"button_message"=>'Login','button_url'=>'/home']);
        }

        $user->confirmed = 1;
        $user->confirmation_code = null;
        $user->save();

        return view('doverification')->with(['message'=>'your account has been verifed !!!','button_message'=>'Login','button_url'=>'/home']);

      //  return Redirect::route('login_path');
    }


}
