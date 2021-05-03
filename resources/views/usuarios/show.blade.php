@extends('adminlte::page')

@section('title', '| Usuarios')

@section('content_header')
<div>
<h1>Ver Usuario</h1>
</div>
@stop

@section('content')
<h1>{{$user}}</h1>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
