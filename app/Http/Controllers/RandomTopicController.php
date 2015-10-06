<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Topic;
use Illuminate\Http\Request;

class RandomTopicController extends Controller {

	public function getRandomTopic()
	{  $newarray=[];
		for($i=0;$i<10;$i++)
		{
		$me=Topic::all()->random(1)->toarray();
				array_push($newarray,$me);
	}
		return response()->json(['error' => false,  'topic' => $newarray]);

	}

}
