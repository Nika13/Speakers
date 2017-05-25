<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    //
    protected $fillable=[
  		'user_id',
  		'friend_user_id'
  	];
    public function users(){
  		return $this->belongsTo('App\User','user_id');
  	}
	public function whoisfriends(){
		return $this->belongsTo('App\Friend','friend_user_id');
	}
}
