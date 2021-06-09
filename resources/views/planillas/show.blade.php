@extends('adminlte::page')

@section('title', '| Planillas')

@section('content_header')
<div>
<h1>Ver Planilla</h1>
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
        <div class="col-lg-4 order-lg-2">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <h5 class="font-weight-bold">{{  $planilla->entrega->nombre }}</h5>
                                <p>{{  $planilla->fecha_entrega }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 order-lg-1">
            <div class="card shadow mb-4">
                <div class="card-header py-3 my-1">
                    <h6 class="m-0 font-weight-bold text-primary">Planilla: {{ $planilla->numero_planilla }}</h6>
                </div>
                <div class="card-body">
                    <h6 class="heading-small text-muted mb-4">Información de la Planilla</h6>
                    <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group focused">
                                <label class="form-control-label font-weight-bold" for="numero planilla">Número de Planilla</label>
                                <p>{{ $planilla->numero_planilla }}</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group focused">
                                <label class="form-control-label font-weight-bold" for="autoridad">Autoridad destino</label>
                                <p>{{ $planilla->autoridad_destino }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group focused">
                                <label class="form-control-label font-weight-bold" for="contenido">Contenido destino</label>
                                <p>{{ $planilla->contenido_destino }}</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group focused">
                                <label class="form-control-label font-weight-bold" for="ciudad">Ciudad</label>
                                <p>{{ $planilla->ciudad }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label font-weight-bold" for="peso">Peso</label>
                                <p>{{ $planilla->peso }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col">
                            <a href="{{ route('planillas.edit', ['planilla' => $planilla->id]) }}" class="text-primary">¿Desea editar esta Planilla?</a>
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
