@extends('admin.template.main')
@section('title', 'Lista de usuarios')
@section('content')
	@section('section-name')
	Lista de usuarios
	@endsection

	<a href=" {{ route('users.create') }}" class="btn btn-info">Registrar nuevo usuario</a><hr>
	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Tipo</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($users as $user)
    <tr>
      <td>{{ $user->id }}</th>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td>
      	@if($user->type == "admin")
      	<span class="badge badge-danger">{{ $user->type }}</span>
      	@else
      	<span class="badge badge-primary">{{ $user->type }}</span>
      	@endif
      </td>
      <td><a href="" class="btn btn-warning" aria-hidden="true"><i class="fas fa-edit"></i></a><a href="{{ route('admin.users.destroy',$user->id) }}" class="btn btn-danger" aria-hidden="true" onclick="return confirm('¿Seguro que deseas eliminarlo?')"><i class="fas fa-times-circle"></i></a></td>
    </tr>
    @endforeach
  </tbody>
</table>
{!! $users->render() !!}
@endsection