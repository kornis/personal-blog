<!DOCTYPE html>
<html lang="ES">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link rel="stylesheet" href=" {{ asset('plugins/bootstrap/css/bootstrap.css') }} ">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('plugins/jquery/chosen_v1.8.7/chosen.css')}}">
	<title></title>
</head>
<body>
	<div class="container cont-menu">
	@include('front.main.partials.frontnav')

	<div class="jumbotron jumbotron-fluid">
	<div class="container">
		<H1 class="display-4">BLOG PESONAL</H1>
		<p class="lead">Un blog personal de prueba</p>
	</div>
	</div>
	</div>

	<div class=" col-sm-12">	
	<div class="row">
	
	<div class="fila col-sm-9 cont-body">	
	<div class="row">

      @foreach($articles as $article)
    	<div class="col-sm-4">

			<div class="card" style="width: 18rem; border: none;">
			@forelse($article->image as $image)
			<img class="card-img-top" src="{{asset('/images/articles/'.$image->name)}}" alt="Card image cap">
			@empty
			<img class="card-img-top" src="{{asset('/images/no-image.jpg')}}" alt="Card image cap">
 			 @endforelse
 					 <div class="card-body" style="padding: 0">
   						 <a href="{{ route('front.article',$article->id) }}"><h5 class="card-title" style="text-align: center;">{{ $article->title }}</h5></a>
    						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><hr>
   							 <i class="far fa-folder-open"></i><a href="{{ route("front.articlesbycategories",$article->category->id) }}" class="card-text"><small>{{ $article->category->name }}</small></a>
   							 <div class="card-text text-right boxed"><i class="far fa-clock"></i><small class="text-muted">{{ $article->created_at }}</small></div>
  					</div>
			</div>
		</div>

	@endforeach
	</div>
	{{ $articles->render() }}
</div>	
@include('front.main.partials.aside')
</div>
</div>


<script type="text/javascript" src="{{ asset('plugins/jquery/jquery-3.3.1.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/jquery/chosen_v1.8.7/chosen.jquery.js') }}"></script>
<script src="{{ asset('plugins/trumbowyg/trumbowyg.min.js') }}"></script>
</body>
</html>