<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model {

	public function comments()
	{
		return $this->hasMany('App\Comment','forum_id','forum_id');
	}

}
