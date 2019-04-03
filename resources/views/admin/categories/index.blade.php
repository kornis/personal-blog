@extends('admin.template.main')

@section('title', 'Lista de categorías')

@section('section-name')
Lista de Categorías
@endsection

@section('content')
<a class="btn btn-success" href=" {{ route('categories.create') }}">Crear nueva Categoría</a>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nombre Categoría</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($categories as $category)
    <tr>
      <td>{{ $category->name }}</td>
      <td>
      	<a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning" aria-hidden="true"><i class="fas fa-edit"></i></a><a href="{{ action('CategoriesController@destroy',$category->id) }}" class="btn btn-danger" aria-hidden="true" onclick="return confirm('¿Seguro que deseas eliminarlo?')"><i class="fas fa-times-circle"></i></a>
      </td>
    </tr>
	@endforeach
  </tbody>
</table>
@endsection