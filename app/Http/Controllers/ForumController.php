<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class ForumController extends Controller {


public function handleChat()
{

	// if(!Auth::check())
	// 		{
	// 			return response()->json(['error' => true, 'description' => 'not allowed']);
	// 		}


		$function=Input::get('function');


    $log = array();
    switch($function) {
       case('getStateAndLoad'):

					$forum_id=Input::get('forum_id');
					$comments=App\Comment::where('forum_id',$forum_id)->get();
					$count=count($comments);
           $log['state'] = $count;
					$log['messages']=$comments;
           break;

       case('update'):

          $state = Input::get('state');
					$forum_id=Input::get('forum_id');

					$comments=App\Comment::where('forum_id',$forum_id)->get();

					$count=count($comments);

          if ($state == $count){
             $log['state'] = $state;
             $log['text'] = false;

          } else {

							$noofRowsToFetch=$count-$state;

						if($noofRowsToFetch)
						{
							$lastRows=App\Comment::where('forum_id',$forum_id)->orderBy('created_at', 'desc')->take($noofRowsToFetch)->get();
							$log['state'] = $state +'this is count' +count($lastRows);
             $log['msg'] = $lastRows;
						}
						else {
							$log['state'] = $state;
							$log['text'] = false;
						}


          }

          break;

       case('send'):
			$message=Input::get("message");
			$email=Auth::user()->email;
			$subtopic_id=Input::get("forum_id");
				if($message=='')
				{
					return response()->json(['error' => true, 'description' => 'message:'.$message]);
								}
		$k=	App\Comment::create(array('message' =>$message,'email'=>$email,'forum_id'=>$subtopic_id ));
		return response()->json(['error' => true, 'description' => 'new'.$k]);



         break;
    }

    echo json_encode($log);
	}
}
