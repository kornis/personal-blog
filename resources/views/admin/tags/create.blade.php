@extends('admin.template.main')

@section('title', 'Crear tags')

@section('content')
@section('section-name')
Crear Tags
@endsection

	
		<form method="post" action="{{ action('TagsController@store') }}">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="name">Nombre Tag</label>
				<input type="text" name="name" class="form-control" required="required" placeholder="Ingrese nombre tag">
			</div>
			<button type="submit" class="btn btn-primary">Crear</button>
		</form>
	

@endsection