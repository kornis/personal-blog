@extends('admin.template.main')

@section('title','Crear Articulos')

@section('section-name')
Crear Artículos
@endsection

@section('content')

@include('admin.template.partials.errors-crud')

<div class="card-body">
	<form method="POST" action="{{ action('CategoriesController@store') }}">
		{{ csrf_field() }}
		
		<div class="form-group">
			<label for="name">Nombre</label>
				<input type="text" class="form-control" name="name" placeholder="Ingrese Nombre Articulo"  required="required">
		</div>
	
		<button type="submit" class="btn btn-primary">Crear</button>
	</form>
</div>
</div>

@endsection