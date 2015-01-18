<article>
		<head>
			<h3>{{$post->title}}</h3>
		</head>
		<div class="content">
		{{$post->content}}
		</div>
		<footer>
			<p>Posted{{$post->created_at->diffForHumans()}}</p>
			<p><a href="{{URL::route('viewPost', array('id'=>$post->id))}}#comments">{{$post->getNumCommentsStr()}}</a></p>
		</footer>
	</article>