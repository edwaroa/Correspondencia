@extends('adminlte::page')

@section('title', '| Dependencia')

@section('content_header')
<div>
<h1>Ver Dependencia</h1>
</div>
@stop

@section('content')
    <!-- Page Heading -->
    <a href="javascript:history.back()" class="btn btn-outline-warning px-3 mx-1 my-2"><i class="fas fa-arrow-circle-left"></i></a>

    @if ($errors->any())
        <div class="alert alert-danger border-left-danger" role="alert">
            <ul class="pl-4 my-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">
        <div class="col-lg-10 order-lg-1">
            <div class="card shadow mb-4">
                <div class="card-header py-3 my-1">
                    <h6 class="m-0 font-weight-bold text-primary">Dependencia: {{ $dependencia->nombre }}</h6>
                </div>
                <div class="card-body">
                    <h6 class="heading-small text-muted mb-4">Información de la Dependencia</h6>
                    <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group focused">
                                <label class="form-control-label font-weight-bold" for="codigo">Codigo</label>
                                <p>{{ $dependencia->codigo }}</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group focused">
                                <label class="form-control-label font-weight-bold" for="nombre">Nombre</label>
                                <p>{{ $dependencia->nombre }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group focused">
                                <label class="form-control-label font-weight-bold" for="descripcion">Descripción</label>
                                <p>{{ $dependencia->descripcion }}</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label font-weight-bold" for="estado">Estado</label>
                                @if ($dependencia->estado == "Activada")
                                    <p>
                                        <span class="badge badge-success">{{ $dependencia->estado }}</span>
                                    </p>
                                @else
                                    <p>
                                        <span class="badge badge-danger">{{ $dependencia->estado }}</span>
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col">
                            <a href="{{ route('dependencias.edit', ['dependencia' => $dependencia->id]) }}" class="text-primary">¿Desea editar esta Dependencia?</a>
                        </div>
                    </div>
                </div>
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
