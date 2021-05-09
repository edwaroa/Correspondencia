@extends('adminlte::page')

@section('title', '| Usuarios')

@section('content_header')
    <h1>Crear Usuario</h1>
@stop

@section('content')
<a href="javascript:history.back()" class="btn btn-outline-warning px-3 mx-2 my-2"><i class="fas fa-arrow-circle-left"></i></a>
<div class="col-lg-12 order-lg-1">
    <div class="card shadow mb-4">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Información del Usuario</h3>
            </div>
            <!-- /.card-header -->

            <!-- form start -->
            <div class="card-body">
            <form method="POST" action="{{route('usuarios.store')}}" autocomplete="off" novalidate enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="pl-lg-4">
                <div class="row">
                <div class="col-lg-6">
                    <div class="form-group focused">
                        <label for="tipo_documento" class="form-control-label">{{ __('Tipo de documento') }}</label>
                        <select id="tipo_documento" name="tipo_documento" class="form-control @error('tipo_documento') is-invalid @enderror" value="{{ old('tipo_documento')}}" autofocus>
                            <option value="" selected disabled>-- Tipo de documento --</option>
                            <option value="Cedula de Ciudadania">Cedula de Ciudadanía</option>
                            <option value="Cedula de Extranjeria">Cedula de Extranjeria</option>
                            <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
                        </select>
                        @error('tipo_documento')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group focused">
                        <label for="documento">Número de Documento</label>
                        <input type="text" class="form-control @error('documento') is-invalid @enderror" id="documento" placeholder="Número de Documento" name="documento" value="{{ old('documento')}}">
                        @error('documento')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-lg-6">
                    <div class="form-group focused">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" placeholder="Nombre" name="nombre" value="{{ old('nombre')}}">
                        @error('nombre')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input type="text" class="form-control @error('apellido') is-invalid @enderror" id="apellido" placeholder="Apellido" name="apellido" value="{{ old('apellido')}}">
                        @error('apellido')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="iniciales">Iniciales</label>
                        <input type="text" class="form-control @error('iniciales') is-invalid @enderror" id="iniciales" placeholder="Iniciales" name="iniciales" value="{{ old('iniciales')}}">
                        @error('iniciales')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="rol">Rol</label>
                        <select id="rol" name="rol" class="form-control @error('rol') is-invalid @enderror" value="{{ old('rol')}}" autofocus>
                        <option value="" selected disabled>-- Seleccione un Rol --</option>
                            @foreach($roles as $rol)
                            <option value="{{$rol->id}}" {{old('rol') == $rol->id ? 'selected' : ''}}>{{$rol->nombre}}</option>
                            @endforeach
                        </select>
                        @error('rol')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="area">Area</label>
                        <input type="text" class="form-control @error('area') is-invalid @enderror" id="area" placeholder="Area" name="area" value="{{ old('area')}}">
                        @error('area')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="email">Correo electronico</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Correo electronico" name="email" value="{{ old('email')}}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Contraseña" name="password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="imagen">Foto</label>
                                <input type="file" class="form-control @error('imagen') is-invalid @enderror" id="imagen" name="imagen">
                        @error('imagen')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                </div>
            </div>   
            </div>
                <!-- Button -->
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col text-center">
                            <button type="submit" class="btn btn-primary">
                            Crear Usuario</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
