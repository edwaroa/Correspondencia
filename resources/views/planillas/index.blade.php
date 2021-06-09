@extends('adminlte::page')

@section('title', '| Planillas')

@section('content_header')
<div>
<h1>Administrar Planillas</h1>
</div>
@stop

@section('content')
<div>
    <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{ route('planillas.create') }}" class="m-0 btn btn-outline-success inline-block">Agregar <i class="fas fa-plus"></i></a>
            </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="bg-primary text-light">
                    <tr>
                        <th scole="col">Número de la planilla</th>
                        <th scole="col">Autoridad</th>
                        <th scole="col">Contenido</th>
                        <th scole="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach($planillas as $planilla)
                    <tr>
                        <td>{{$planilla->numero_planilla}}</td>
                        <td>{{$planilla->autoridad_destino}}</td>
                        <td>{{$planilla->contenido_destino}}</td>
                        <td>
                        <div class="btn-group">
                                <a href="{{route('planillas.show',['planilla'=>$planilla->id])}}" class="btn btn-primary rounded">
                                    <i class="fas fa-eye"></i>
                                </a>
                                @if (auth()->user()->rol->nombre == "Super Admin")
                                    <a href="{{route('planillas.edit',['planilla'=>$planilla->id])}}" class="btn btn-warning mx-2 rounded">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
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
