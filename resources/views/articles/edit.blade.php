@extends('admin.template.main')

@section('title', 'Edición artículo: '.$articles->title)

@section('content')
@section('section-name')
Edición Articulo:  {{$articles->title}}
@endsection

	<form method="post" action="{{action('ArticlesController@update',$articles)}}">
		{{csrf_field()}}
		<input name="_method" type="hidden" value="PUT">
		<div class="form-group">
			<label for="title">Titulo del Articulo</label>
			<input type="text" name="title" class="form-control" value="{{ $articles->title }}" placeholder="Ingrese titulo..." required>
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
			<textarea name="content" class="textarea-cont form-control" required>{{$articles->content}}</textarea> 
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

		<button type="submit" class="btn btn-primary">Modificar Articulo</button>
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