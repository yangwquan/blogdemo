
@extends('layouts.default')

@section('header-right')
<a href="{{URL::route('newPost')}}" class="btn btn-default btn-lg">
	<span class="glyphicon glyphicon-pencil"></span>	

</a>
@stop
@section('contents')
		@foreach($posts as $post)
			@include('posts.partials.post', array('post'=>$post))
		@endforeach
	<!--
	<form action="{{URL::route('createPost')}}">
		
		<div class="form-group">
			<input name="title" type="text" class="form-control" placeholder="Title">
		</div>
		<div class="form-group">
			<textarea name="content" class="form-control" placeholder="Write Here"> </textarea> 
		</div>
		
		<input type="submit" class="btn btn-primary">
	</form>
	-->
<!--
	<form action="{{URL::route('createPost')}}">		
			<input name="title" type="text">
			<textarea name="content"> </textarea> 	
		<input type="submit">
	</form>
-->
<!--
	<form action="{{URL::route('createPost')}}">		
		<input type="submit">
	</form>
-->
	{{HTML::linkRoute('createPost', 'hometest')}}

@stop

