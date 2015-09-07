<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Content;
use Illuminate\Http\Request;



class ContentController extends Controller {


//get all content by the subtopicid

	public function showBySubTopicId($subtopic_code)
	{
		$content=Content::where('subtopic_code',$subtopic_code)->get();


		        return response()->json(['error' => false, 'content' => $content]);
	}
}
