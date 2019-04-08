@extends('admin.template.main')

@section('content')

@section('section-name')
Iniciar Sesion
@endsection
@include('admin.template.partials.errors-crud')
    
    <form method="POST" action="{{ action('Auth\LoginController@authenticate')}}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="Email">Ingrese Email</label>
            <input type="email" name="email" placeholder="email@example.com" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Ingrese Contraseña</label>
            <input type="password" name="password" class="form-control">
        </div>
        <button class="btn btn-success">Ingresar</button>
        <a href="{{ route('users.create') }}" class="btn btn-primary">Registrarse</a>
        
    </form>

@endsection
