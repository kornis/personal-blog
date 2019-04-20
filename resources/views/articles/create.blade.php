@extends('admin.template.main')

@section('title', 'Crear Articulos')

@section('content')
@section('section-name')
Crear Articulo
@endsection

	<form method="post" action="{{action('ArticlesController@store')}}" enctype="multipart/form-data">
		{{csrf_field()}}
		<div class="form-group">
			<label for="title">Titulo del Articulo</label>
			<input type="text" name="title" class="form-control" placeholder="Ingrese titulo..." required>
		</div>

		<div class="form-group">
			<label for="category_id">Categorias</label>
			<select class="form-control" name="category_id" required>
				<option disabled selected>Seleccione categoría...</option>
				@foreach($categories as $category)
				<option value="{{$category->id}}">{{$category->name}}</option>
				@endforeach
			</select>
		</div>

		<div class="form-group">
			<label for="content">Contenido</label>
			<textarea name="content" class="textarea-cont form-control" required></textarea> 
		</div>
		
		<div class="form-group">
			<label for="tags[]">Tags</label>
			<select multiple class="form-control chosen-form" data-placeholder="Seleccione un maximo de 3 tags..." required name="tags[]">
				<option disabled>Puede seleccionar multiples...</option>
				@foreach($tags as $tag)
				<option value="{{$tag->id}}">{{$tag->name}}</option>
				@endforeach
			</select>
		</div>

		
			<label for="images">Imagenes</label>
 			<input type="file" name="images" >
		
		
		<button type="submit" class="btn btn-primary">Crear Articulo</button>
</form>

@endsection

@section('jsContent')
	<script>
	 $(".chosen-form").chosen({

	 no_results_text: "No se encontró el tag...",
	 max_selected_options: 5
	});

	 $('textarea').trumbowyg({
});
</script>

@endsection