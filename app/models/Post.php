<?php

class Post extends Eloquent{

	public $table = 'posts';
	protected $fillable= array('title', 'content');
	public static $rules = array(
		'title'=>'required|min:2',
		'content'=>'required|min:10'
		);
	public static function validate($data){
		return Validator::make($data, static::$rules);
	}

	public function comments(){
		return $this->hasMany('Comment');
	}

	public function getNumCommentsStr(){
		$num = $this->comments()->count();

		return $num. ' comments';
	}

}