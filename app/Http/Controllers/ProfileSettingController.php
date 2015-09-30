<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

class ProfileSettingController extends Controller {

	// retunr the dashboard if already login else homespage
	public function start()
	{
		if(Auth::check())
		{
		return \View::make('profile_settings')->with('name','ritesh');
	}
	else {


	return Redirect::to('/home');
}


	}

}
