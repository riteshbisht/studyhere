<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model {

	protected $primaryKey = 'uid';
public function users()
{
  return $this->belongsTo('App\User','email','email');
}



}
