@extends('layouts.default')

@section('contents')
	@include('posts.partials.post', array('post'=>$post))


	<hr/>
	<section id="comments">
		@foreach($post->comments as $comment)
			<div class="comment">
				<p>{{$comment->name}} say ...</p>
				<blockquote>{{$comment->content}}</blockquote>				
			</div>
		@endforeach
	</section>

	<section>
		<h3 class="title">Add Comment</h3>	
		<form action="{{URL::route('createComment', array('id' => $post->id))}}">
			<div class="form-group">
			<input name="name" type="text" class="form-control" placeholder="Your name">
			</div>
			<div class="form-group">
			<textarea name="content" class="form-control" placeholder="Write Here"> </textarea> 
			</div>		
			<input type="submit" class="btn btn-primary">
		</form>

	</section>
@stop
