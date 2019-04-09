@extends('admin.template.main')

@section('title', 'Crear Articulos')

@section('content')
@section('section-name')
Crear Articulo
@endsection

	<form method="post" action="{{action('ArticlesController@store')}}" enctype="multipart/form-data">
		{{csrf_field()}}
		<div class="form-group">
			<label for="name">Titulo del Articulo</label>
			<input type="text" name="name" class="form-control" placeholder="Ingrese titulo..." required>
		</div>

		<div class="form-group">
			<label for="Categories">Categorias</label>
			<select class="form-control" required>
				<option disabled selected>Seleccione categoría...</option>
				@foreach($categories as $category)
				<option>{{$category->name}}</option>
				@endforeach
			</select>
		</div>

		<div class="form-group">
			<label for="content">Contenido</label>
			<textarea name="content" class="form-control" required></textarea> 
		</div>
		
		<div class="form-group">
			<label for="Tags">Tags</label>
			<select multiple class="form-control" required>
				<option disabled>Puede seleccionar multiples...</option>
				@foreach($tags as $tag)
				<option>{{$tag->name}}</option>
				@endforeach
			</select>
		</div>

		
			<label for="images">Imagenes</label>
 			<input type="file" name="images" >
		
		
		<button type="submit" class="btn btn-primary">Crear Articulo</button>
</form>

@endsection