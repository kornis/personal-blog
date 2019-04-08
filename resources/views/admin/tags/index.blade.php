@extends('admin.template.main')

@section('title', 'Tags')

@section('content')

@section('section-name')
Lista de tags
@endsection
	<a href="{{ action('TagsController@create') }}" class="btn btn-primary">Crear Tag</a>
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