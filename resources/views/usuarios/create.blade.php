@extends('adminlte::page')

@section('title', '| Usuarios')

@section('content_header')
    <h1>Crear Usuario</h1>
@stop

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Información del Usuario</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form>
            <div class="card-body">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="texy" class="form-control" id="nombre" placeholder="Nombre">
              </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" id="apellido" placeholder="Apellido">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Correo electronico</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Correo electronico">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Contraseña</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Foto</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Escoger foto</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Subir</span>
                    </div>
                </div>
            </div>
            </div>
                
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>
        </form>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
