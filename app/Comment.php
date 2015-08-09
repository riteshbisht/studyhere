<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

	protected $fillable = ['message', 'email', 'forum_id'];

	public function forums()
	{
		return $this->belongsTo('App\Forum','forum_id','forum_id');
	}

}
