<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('title', 'Default') | Panel de Administracion</title>
	<link rel="stylesheet" href=" {{ asset('plugins/bootstrap/css/bootstrap.css') }} ">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('plugins/jquery/chosen_v1.8.7/chosen.css')}}">
	<link rel="stylesheet" href="{{ asset('plugins/trumbowyg/ui/trumbowyg.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
	
</head>

<body class="col-md-12">
		@include('front.main.partials.frontnav')
			<div class="jumbotron jumbotron-fluid">
	<div class="container">
		<H1 class="display-4">BLOG PESONAL</H1>
		<p class="lead">Un blog personal de prueba</p>
	</div>
	</div>
	<section>
	<div class="row">
		<div class="cont-body col-md-2">
		</div>

		<div class="cont-body col-md-7">
					
						<div class="row">
			<div class="card-title">
				<h3>
				@yield('section-name')
			</h3>
			</div>
		</div>
				
				<div class="row">
					@yield('article-img')
				</div>	
				<div class="row">
			@if(session('success'))
				{!! session('success') !!}
			@endif
			<div class="card-body" style="padding-bottom:5px !important; ">
			
		@yield('content')
	</div>
	</div>
</div>
		
		@yield('aside')
		@yield('content-tags')
	</div>
</section>

	
<script type="text/javascript" src="{{ asset('plugins/jquery/jquery-3.3.1.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/jquery/chosen_v1.8.7/chosen.jquery.js') }}"></script>
<script src="{{ asset('plugins/trumbowyg/trumbowyg.min.js') }}"></script>
@yield('jsContent')
</body>
</html>