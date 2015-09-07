<?php

namespace App\Http\Controllers;

use App\Topic;
use App\Subtopic;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SubTopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

     //return all the subtopic of particular topic 
    public function showByTopicId($topic_id)
    {
        $subtopic = Topic::find($topic_id)->subtopics;
        $topic = Topic::find($topic_id)->toArray();

        return response()->json(['error' => false, 'topic_name' => $topic['name'], 'sub_topic' => $subtopic->toArray()]);
    }


}
