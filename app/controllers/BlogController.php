<?php

class BlogController extends BaseController{

	public $restful = true;
	public function hometest(){
		return View::make('posts.hometest')
			->with('id', $id);
	}
	public function hometesta(){
		$comment = new Comment();
		$comment->name = Input::get('name');
		$comment->content = nl2br(Input::get('content'));
		return View::make('posts.hometesta');
	}
	public function get_home(){
		$view = View::make('posts.home')
			->with('posts', Post::all());
		return $view;
	}
	public function newPost(){
		$view = View::make('posts.new');
		return $view;
	}
	public function createPost(){

		$post = new Post();
		$post->title = Input::get('title');
		$post->content = nl2br(Input::get('content'));
		$post->save();
		//Post::create(array(
		//	'title'=>Input::get('title'),
		//	'content'=>Input::get('content')
		//	))
		$id = $post->id;
		return Redirect::route('viewPost', array('id' => $id));
		//return Redirect::route('home');
		//return View::make('posts.hometest')
		//	->with('id', $id);
	}

	public function createComment($id){

		$post = Post::findOrFail($id);
		$comment = new Comment();
		$comment->name = Input::get('name');
		$comment->content = nl2br(Input::get('content'));
		$post->comments()->save($comment);
		$id = $post->id;
		return Redirect::route('viewPost', array('id' => $id));
		
		return View::make('posts.hometest')
			->with('id', $id);
	}

	public function viewPost($id){
		$post=new Post();
		$post=Post::findOrFail($id);
		//return View::make('posts.hometest', array('id' => $id));
		return View::make('posts.view', array('post' => $post));
		//	->with('post', Post::find($id));
		//return View::make('posts.hometest')
		//	->with('id', $id);
		//$view=View::make('posts.view', array('post'=>$post));
		//return $view;
	}

}