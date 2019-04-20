<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('title', 'Default') | Panel de Administracion</title>
	<link rel="stylesheet" href=" {{ asset('plugins/bootstrap/css/bootstrap.css') }} ">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('plugins/jquery/chosen_v1.8.7/chosen.css')}}">
	<link rel="stylesheet" href="{{ asset('plugins/trumbowyg/ui/trumbowyg.min.css')}}">
	
</head>
<body style="width: 80%; margin:0 auto">
	@include('admin.template.partials.nav')
	<section>
		<div class="card">
			<div class="card-header">
				@yield('section-name')
			</div>
	
			@if(session('success'))
				{!! session('success') !!}
			@endif
			<div class="card-body">
			
		@yield('content')
	</div>
	</div>
	</section>
	
<script type="text/javascript" src="{{ asset('plugins/jquery/jquery-3.3.1.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/jquery/chosen_v1.8.7/chosen.jquery.js') }}"></script>
<script src="{{ asset('plugins/trumbowyg/trumbowyg.min.js') }}"></script>
@yield('jsContent')
</body>
</html>