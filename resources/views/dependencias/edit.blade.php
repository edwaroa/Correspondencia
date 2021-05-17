@extends('adminlte::page')

@section('title', '| Dependencias')

@section('content_header')
<div>
<h1>Editar Dependencia</h1>
</div>
@stop

@section('content')
<div class="container-fluid">
    <a href="javascript:history.back()" class="btn btn-outline-warning px-3 mx-2 my-2"><i class="fas fa-arrow-circle-left"></i></a>
    <div class="col-lg-12 order-lg-1">
        <div class="card shadow mb-4">
            <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Editar la información de la Dependencia</h3>
            </div>    
            </div>
            <div class="card-body">
            <form method="POST" action="{{ route('dependencias.update', ['dependencia'=>$dependencia->id])}}" enctype="multipart/form-data" autocomplete="off" novalidate>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="PUT">
            <div class="pl-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group focused">
                            <label class="form-control-label" for="codigo">Código<span class="small text-danger">*</span></label>
                            <input type="text" id="codigo" class="form-control @error('codigo') is-invalid @enderror" name="codigo" placeholder="Código" value="{{$dependencia->codigo}}">
                            @error('codigo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group focused">
                            <label class="form-control-label" for="nombre">Nombre<span class="small text-danger">*</span></label>
                            <input type="text" id="nombre" class="form-control @error('nombre') is-invalid @enderror" name="nombre" placeholder="Nombre" value="{{$dependencia->nombre}}">
                            @error('nombre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea type="text" rows="10" class="form-control @error('descripcion') is-invalid @enderror" id="descripcion" placeholder="Descripción" name="descripcion" value="{{$dependencia->descripcion}}">{{$dependencia->descripcion}}</textarea>
                    @error('descripcion')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <!-- Button -->
            <div class="pl-lg-4">
                <div class="row">
                    <div class="col text-center">
                        <button type="submit" class="btn btn-primary">
                            <span class="icon text-white-50">Guardar cambios</span></button>
                    </div>
                </div>
            </div>
            </form>
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