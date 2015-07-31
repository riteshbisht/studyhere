<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Subject;

class SubjectController extends Controller
{
    public function showAllSubject($course_code)
    {
        $validator = Validator::make(
            array('code' => $course_code),
            array('code' => array('required', 'regex:/(?i)^[a-z]+/'))
    );
        if ($validator->fails()) {
            return response()->json(['error' => true, 'description' => 'only alphabets are allowed']);
        }
        $subject = Subject::where('course_code', 'like', $course_code)->get();
        if ($subject->isEmpty()) {
            return response()->json(['error' => true, 'description' => 'no code is found']);
        }

        return response()->json(['error' => false, 'couse_code' => $course_code, 'sub_topic' => $subject->toArray()]);
    }


		public function showAllSubjectByyear($course_code,$year)
    {
        $validator = Validator::make(
            array('code' => $course_code,
										'$year'=>$year	),
            array('code' => array('regex:/(?i)^[a-z]+/'),
										'year'=>array('regex:/[0-9]+/'))

    );

        if ($validator->fails()) {
            return response()->json(['error' => true, 'message'=>$validator->messages()]);
        }
        $subject = Subject::where('course_code', 'like', $course_code)->where('year',$year)->get();
        if ($subject->isEmpty()) {
            return response()->json(['error' => true, 'description' => 'no code is found']);
        }

        return response()->json(['error' => false, 'couse_code' => $course_code, 'sub_topic' => $subject->toArray()]);
    }

		public function showAllSubjectBysemester($course_code,$semester)
    {
        $validator = Validator::make(
            array('code' => $course_code,
										'$semester'=>$semester	),
            array('code' => array('regex:/(?i)^[a-z]+/'),
										'semester'=>array('regex:/[0-9]+/'))

    );

        if ($validator->fails()) {
            return response()->json(['error' => true, 'message'=>$validator->messages()]);
        }
        $subject = Subject::where('course_code', 'like', $course_code)->where('semester',$semester)->get();
        if ($subject->isEmpty()) {
            return response()->json(['error' => true, 'description' => 'no code is found']);
        }

        return response()->json(['error' => false, 'couse_code' => $course_code, 'sub_topic' => $subject->toArray()]);
    }
}
