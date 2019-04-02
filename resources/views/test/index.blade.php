<html>
	<head>
	<meta charset="UTF-8">
	<title>{{ $article->title }}</title>	
	</head>
	<body>
		codigo facilito
			<br><br>
			<h1>
			{{ $article->title }}
			</h1>
			<hr>
			{{ $article->content }}
			<hr>
			{{ $article->user->name }} | {{ $article->category->name }} | 

			@foreach($article->tags as $tag)
			 {{ $tag->name }} 
			@endforeach
	</body>
</html>


