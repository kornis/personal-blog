@extends('admin.template.main')

@section('title','Crear Usuario')

@section('content')
	@section('section-name')
	Crear usuario
	@endsection
	
	@include('admin.template.partials.errors-crud')

<div class="card-body">
	<form method="POST" action="{{ action('UsersController@store') }}">
		{{ csrf_field() }}
		
		<div class="form-group">
			<label for="name">Nombre</label>
				<input type="text" class="form-control" name="name" placeholder="Ingrese Nombre"  required="required">
		</div>

		<div class="form-group">
			<label for="email">Email</label>
				<input type="email" class="form-control" name="email" placeholder="Email" required="required" >
		</div>

		<div class="form-group">
			<label for="password">Contraseña</label>
				<input type="password" class="form-control" name="password" placeholder="Contraseña" required="required">
		</div>

		<div class="form-group">
			<label for="type">Tipo</label>
				<select type="text" name="type" class="form-control">
					
				<option value="0">Seleccione...</option>
				<option value="admin">Administrador</option>
				<option value="member">Miembro</option>
				</select>
		</div>	
		<button type="submit" class="btn btn-primary">Crear</button>
	</form>
</div>
</div>

@endsection