@extends('admin.template.main')

@section('title','Editar Usuario')

@section('content')
	@section('section-name')
	<label>Editar Usuario: {{ $user->name }}</label>
	@endsection
	<div class="card-body">

	<form method="POST" action="{{ action('UsersController@update', $user) }}">
		{{ csrf_field() }}
		<input name="_method" type="hidden" value="PUT">
		<div class="form-group">
			<label for="name">Nombre</label>
				<input type="text" class="form-control" name="name" value="{{ $user->name }}"  required="required">
		</div>

		<div class="form-group">
			<label for="email">Email</label>
				<input type="email" class="form-control" name="email" value="{{ $user->email }}" required="required" >
		</div>


		<div class="form-group">
			<label for="type">Tipo</label>
				<select type="text" name="type" class="form-control">
					
				<option value="0">Seleccione...</option>
				<option value="admin">Administrador</option>
				<option value="member">Miembro</option>
				</select>
		</div>	
		<button type="submit" class="btn btn-primary">Editar</button>
	</form>
</div>
</div>

@endsection