<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;



class HomeController extends Controller
{

  //if already login return dashboard
    public function start()
    {

        if (Auth::check()) {

          return  Redirect::to('/dashboard');
        }
else {

        return view('home');
			}
    }
}
