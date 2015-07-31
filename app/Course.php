<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model {

	//
		protected $primaryKey = 'course_code';
	public function subjects()
	{
		return $this->hasMany('App\Subject','course_code','course_code');
	}

}
