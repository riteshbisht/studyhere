<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model {

<<<<<<< HEAD
public function users()
{
  return $this->belongsTo('App\User','email','email');
}
=======
	public function users()
	{
			return $this->belongsTo('App\User','uid','uid');
	}

>>>>>>> eab11f590f67da68da82983335fb634962f22834
}
