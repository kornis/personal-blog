@extends('admin.template.main')

@section('title', 'Articulos')

@section('content')

@section('section-name')
Artículos
@endsection
<div class="row">
	<div class="col">
<span href=" {{ route('articles.create') }}" class="btn btn-info">Registrar nuevo artículo</span>
	</div>
	<div class="col">
		<form method="get" class="form-inline float-right" action="{{action('ArticlesController@index') }}">
			<div class="input-group mb-3">
				<input type="text" class="form-control" placeholder="Buscar" name ="title" aria-label="articles" aria-describedby="articles-search">
		  			<div class="input-group-prepend">
		    			<span class="input-group-text" id="articles-search"><i class="fas fa-search"></i></span>
		  			</div>
			</div>
		</form>	
	</div>
</div>	

@include('admin.template.partials.errors-crud')

	<table class="table table-stripped">
		<thead>
			<th>ID</th>
			<th>Titulo</th>
			<th>Categoría</th>
			<th>Usuario</th>
			<th>Action</th>
		</thead>
		<tbody>
			@foreach($articles as $article)
			<tr>
				<td>{{ $article->id }}</td>
				<td>{{ $article->title }}</td>
				<td>{{ $article->category->name }}</td>
				<td>{{ $article->user->name }}</td>
				<td><a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning" aria-hidden="true"><i class="fas fa-edit"></i></a><a href="{{ route('admin.articles.destroy',$article->id) }}" class="btn btn-danger" aria-hidden="true" onclick="return confirm('¿Seguro que deseas eliminarlo?')"><i class="fas fa-times-circle"></i></a></td></td>
			</tr>
			@endforeach
		</tbody>

	</table>
	<nav aria-label="Page navigation example">
		{!! $articles->render() !!}
	</nav>


@endsection