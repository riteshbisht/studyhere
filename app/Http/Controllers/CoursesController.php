<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Support\Facades\Validator;

class CoursesController extends Controller
{
    public function getAll()
    {
        $courses = Course::get();

        return response()->json(['error' => false, 'topic' => $courses]);
    }

    public function getByUniversity($code)
    {
        $university = Course::where('university_code', $code)->get();
        $validator = Validator::make(
                array('code' => $code),
                array('code' => array('required', 'regex:/(?i)^[a-z]+/'))
            );
        if ($validator->fails()) {
            return response()->json(['error' => true, 'description' => 'only alphabets are allowed']);
        }
        if ($university == null) {
            return response()->json(['error' => true, 'description' => 'code is not valid']);
        }

        return response()->json(['error' => false, 'topic' => $university]);
    }
}
