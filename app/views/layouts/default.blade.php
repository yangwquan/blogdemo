<!DOCTYPE html>
<html>
<head>
	<title>Blog Homepage</title>
	{{ HTML::style('css/bootstrap.min.css') }}
</head>
<body>
	<header>
		<div class="container">
			<div class="pull-right">
				@yield('header-right')
			</div>
			<h1>{{HTML::linkRoute('home', 'This is the Blog')}}</h1>
			<!--<h1><a href="/">This is the Blog</a></h1>-->
			<p class="lead">An example of dynamic web app development with laravel</p>
		</div>
	</header>
	<div class="main">
		<div class="container">
			@yield('contents')
		</div>
	</div>
	
</body>
</html>