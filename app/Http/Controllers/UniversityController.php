<?php

namespace App\Http\Controllers;

use App\University;
use Illuminate\Support\Facades\Validator;

class UniversityController extends Controller
{
  
    public function getAll()
    {
        $university = University::get();

        return response()->json(['error' => false, 'topic' => $university]);
    }

    public function getByCode($code)
    {
        $validator = Validator::make(
    array('code' => $code),
    array('code' => array('required', 'regex:/(?i)^[a-z]+/'))
);
        if ($validator->fails()) {
            return response()->json(['error' => true, 'message'=>$validator->messages()]);
        }

        $university = university::where('university_code', $code)->get();
        if ($university->isEmpty()) {
            return response()->json(['error' => true, 'description' => 'no code is found']);
        }

        return response()->json(['error' => false, 'topic' => $university]);
    }
}
