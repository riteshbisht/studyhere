<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model {

	//
	protected $primaryKey = 'subject_code';

	public function topics()
	{
		return $this->hasMany('App\Topic','subject_code','subject_code');

	}


}
