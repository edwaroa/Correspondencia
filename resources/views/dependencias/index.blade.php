@extends('adminlte::page')

@section('title', '| Dependencias')

@section('content_header')
<div>
<h1>Administrar Dependencias</h1>
</div>
@stop

@section('content')
<div>
    <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{ route('dependencias.create') }}" class="m-0 btn btn-outline-success inline-block">Agregar <i class="fas fa-plus"></i></a>
            </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="bg-primary text-light">
                    <tr>
                        <th scole="col">Codigo</th>
                        <th scole="col">Nombre</th>
                        <th scole="col">Descripción</th>
                        <th scole="col">Tipo Dependencia</th>
                        <th scole="col">Estado</th>
                        <th scole="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach($dependencias as $dependencia)
                    <tr>
                        <td>{{$dependencia->codigo}}</td>
                        <td>{{$dependencia->nombre}}</td>
                        <td>{{$dependencia->descripcion}}</td>
                        <td>{{$dependencia->tipo_dependencia}}</td>
                        <td class="text-center">
                            @if ($dependencia->estado == "Activada")
                                <span class="badge badge-success">{{ $dependencia->estado }}</span>
                            @else
                                <span class="badge badge-danger">{{ $dependencia->estado }}</span>
                            @endif
                        </td>
                        <td>
                        <div class="btn-group">
                                <a href="{{route('dependencias.show',['dependencia'=>$dependencia->id])}}" class="btn btn-primary rounded">
                                    <i class="fas fa-eye"></i>
                                </a>
                                @if (auth()->user()->rol->nombre == "Super Admin")
                                    <a href="{{route('dependencias.edit',['dependencia'=>$dependencia->id])}}" class="btn btn-warning mx-2 rounded">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>

                                    <form action="{{route('dependencias.estado',['dependencia'=>$dependencia->id])}}" method="POST">
                                        @csrf
                                        @if($dependencia->estado=='Activada')
                                        <button type="submit" class="btn btn-danger icon text-white-50"><i class="fas fa-trash"></i></button>
                                        @else
                                        <button type="submit" class="btn btn-success icon text-white-50"><i class="fas fa-check"></i></button>
                                        @endif
                                    </form>
                                @endif
                            </div>
                        </td>
                    </tr>
                     @endforeach
                </tbody>
                </table>
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
