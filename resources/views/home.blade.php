@extends('adminlte::page')

@section('title', '| Inicio')

@section('content_header')
    <h1>Bienvenido</h1>
@stop

@section('content')
    <p>Bienvenido al Sistema Gestor de Correspondencia.</p>
              <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>
                <p>Usuarios Registrados</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"><a href="{{ route('usuarios.create') }}" class="small-box-footer"></a></i>
              </div>
              <a href="{{ route('usuarios.index') }}" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
