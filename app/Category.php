<?php

namespace App;

use App\Article;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Category extends Model
{

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	public function articles(){
		return $this->hasMany(Article::class);
	}
}
