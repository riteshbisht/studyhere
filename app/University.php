<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model {
	protected $primaryKey = 'university_code';
	public function courses()

	{
		return $this->hasMany('App\Course','university_code','university_code');
	}


}
