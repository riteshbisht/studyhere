<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Video;
use Illuminate\Http\Request;
use Vinelab\Http\Client as HttpClient;
class VideoController extends Controller {

	//
	public function initial()
	{
			$allvideo=Video::all();

return view('video')->with('allvideos',$allvideo);
	}


	public function getById($videoid)
	{

			return view('videoplayer')->with('videoid',$videoid);
	}

	public function getBySearch($searchId)
	{

	}

}
