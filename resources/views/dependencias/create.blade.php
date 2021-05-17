@extends('adminlte::page')

@section('title', '| Dependencias')

@section('content_header')
    <h1>Crear Dependencias</h1>
@stop

@section('content')
<div class="container-fluid">
    <a href="javascript:history.back()" class="btn btn-outline-warning px-3 mx-2 my-2"><i class="fas fa-arrow-circle-left"></i></a>
    <div class="col-lg-12 order-lg-1">
        <div class="card shadow mb-4">
            <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Información de la Dependencia</h3>
            </div>
            </div>

            <div class="card-body">
            <form method="POST" action="{{route('dependencias.store')}}" autocomplete="off" novalidate enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="pl-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="codigo">Código</label>
                            <input type="text" class="form-control @error('codigo') is-invalid @enderror" id="codigo" placeholder="Código" name="codigo" value="{{ old('codigo')}}">
                            @error('codigo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
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
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                        <textarea type="text" rows="10" class="form-control @error('descripcion') is-invalid @enderror" id="descripcion" placeholder="Descripción" name="descripcion" value="{{ old('descripcion')}}"></textarea>
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
                                Crear Dependencia</button>
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
