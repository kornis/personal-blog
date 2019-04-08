@extends('admin.template.main')

@section('title', 'Editar Categorias')

@section('content')

<div class="card-body">
	@section('section-name')
		Editar categoría: {{ $category->name }}
	@endsection
	<form method="POST" action="{{ action('CategoriesController@update',$category) }}">
	{{ csrf_field() }}
	<input name="_method" type="hidden" value="PUT">
		<div class="form-group">
			<label for="name">Categoría</label>
			<input type="text" class="form-control" name="name" value="{{ $category->name }}" required="required">
		</div>
		<button type="submit" class="btn btn-primary">Modificar</button>
	</form>
</div>

@endsection