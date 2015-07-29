<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use App\Topic;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function showBySubject($code)
    {
        $subject_code =$code;

				$validator = Validator::make(
		array('code' => $subject_code),
		array('code' => array('required', 'regex:/(?i)[a-z]+-?[0-9]+/'))
);
				if ($validator->fails()) {
						return response()->json(['error' => true, 'description' => 'only alphabets are allowed']);
				}

        $topic = Topic::where('subject_code', $subject_code)->get();
        if ($topic->isEmpty()) {
            return response()->json(['error' => true, 'topic' => 'subject code is wrong!!!']);
        }

        return response()->json(['error' => false, 'topic' => $topic]);
    }
	public function showByUnit($code,$unit_no)
		{
				$validator = Validator::make(
		array('code' => $code,'unit_no'=>$unit_no),
		array('code' => array('regex:/(?i)[a-z]+-?[0-9]+/'),
						'unit_no'=>array('regex:/[0-9]+/'))
);
				if ($validator->fails()) {
						return response()->json(['error' => true, 'message'=>$validator->messages()]);
				}

				$topic = Topic::where('subject_code', $code)->where('unit',$unit_no)->get();
				if ($topic->isEmpty()) {
						return response()->json(['error' => true, 'topic' => 'subject code or unit no is wrong!!!']);
				}

				return response()->json(['error' => false, 'topic' => $topic]);
		}



}
