<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	// Timestamps off
	public $timestamps = false;

	public function users (){
		return $this->belongsToMany('User', 'users_roles');
	}
}
