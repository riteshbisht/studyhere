<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Content;
use App\SubTopic;
use Illuminate\Http\Request;

class SourceController extends Controller {

	//
	public function getAll($subtopic_name){
		$me=SubTopic::where('name',$subtopic_name)->get()->toArray();
		$arr=$me[0];
$subtopic_code=$arr["subtopic_code"];
	$content=Content::where('subtopic_code',$subtopic_code)->get();

	return view('sources')->with(['allcontent'=>$content,'subtopic_name'=>$subtopic_name,'subtopic_code'=>$subtopic_code]);

		}


}
