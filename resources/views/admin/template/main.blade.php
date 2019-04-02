<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('title', 'Default') | Panel de Administracion</title>
	<link rel="stylesheet" href=" {{ asset('plugins/bootstrap/css/bootstrap.css') }} ">
	
</head>
<body style="width: 80%; margin:0 auto">
	@include('admin.template.partials.nav')
	<section>
		<div class="card">
			<div class="card-header">
				@yield('section-name')
			</div>
			<div class="card-body">
		@yield('content')
	</div>
	</div>
	</section>
	
<script type="text/javascript" src="{{ asset('plugins/jquery/jquery-3.3.1.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>