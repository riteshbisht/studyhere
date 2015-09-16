<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\SubTopic;
use App\Content;
use Illuminate\Http\Request;

class SearchController extends Controller {

	public function search($tag)
	{
		$tuple=SubTopic::where('tag',$tag)->get()->toArray();
		if($tuple==null)
		{
		 return view('search')->with('message','not found');
		}
		$tuple=$tuple[0];
		$subtopic_code=$tuple['subtopic_code'];

		$sources=Content::where('subtopic_code',$subtopic_code)->get()->toArray();

			return view('search')->with('message',$sources);
	}


}
