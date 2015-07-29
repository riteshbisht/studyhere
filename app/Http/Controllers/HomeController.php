<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function start()
    {
        if (Auth::check()) {
				//	dd("hello");
          return  Redirect::to('/dashboard');
        }
else {

        return view('home');
			}
    }
}
