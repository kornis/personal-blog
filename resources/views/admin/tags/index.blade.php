@extends('admin.template.main')

@section('title', 'Tags')

@section('content')

@section('section-name')
Lista de tags
@endsection
<div class="row">
	<div class="col">
		<span><a href="{{ action('TagsController@create') }}" class="btn btn-primary">Crear Tag</a></span>
	</div>
	<div class="col">
		<form method="get" class="form-inline float-right" action="{{action('TagsController@index') }}">
			<div class="input-group mb-3">
				<input type="text" class="form-control" placeholder="Buscar" name ="name" aria-label="tags" aria-describedby="tags-search">
		  			<div class="input-group-prepend">
		    			<span class="input-group-text" id="tags-search"><i class="fas fa-search"></i></span>
		  			</div>
			</div>
		</form>	
	</div>
</div>	

	<table class="table table-striped">
		<thead>
			<tr>
				<th scope="col">Tag</th>
				<th scope="col">Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($tags as $tag)
			<tr>
				<td>{{$tag->name}}</td>
				<td><a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-warning" aria-hidden="true" style="margin-right: 2px"><i class="fas fa-edit"></i></a><a href="{{ route('admin.tags.destroy',$tag->id) }}" class="btn btn-danger" aria-hidden="true" onclick="return confirm('¿Seguro que deseas eliminarlo?')"><i class="fas fa-times-circle"></i></a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
{!! $tags->render() !!}
@endsection