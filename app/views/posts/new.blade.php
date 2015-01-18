@extends('layouts.default')

@section('contents')
	<h3>Add a blog post</h3>	
	
	<form action="{{URL::route('createPost')}}">
		
		<div class="form-group">
			<input name="title" type="text" class="form-control" placeholder="Title">
		</div>
		<div class="form-group">
			<textarea name="content" class="form-control" placeholder="Write Here"> </textarea> 
		</div>
		
		<input type="submit" class="btn btn-primary">
	</form>
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
	{{HTML::linkRoute('hometesta', 'hometest')}}

@stop