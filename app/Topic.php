<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model {

	//
	protected $primaryKey = 'topic_code';
	
	public function subtopics()
	{
		return $this->hasMany('App\SubTopic','topic_code','topic_code');
	}

}
