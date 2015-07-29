<?php namespace App\Http\Controllers;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class RegistrationController extends Controller {

	public function confirm($confirmation_code)
    {
        if( ! $confirmation_code)
        {
            return $confirmation_code;
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
