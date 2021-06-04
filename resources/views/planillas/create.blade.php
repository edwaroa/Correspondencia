@extends('adminlte::page')

@section('title', '| Planillas')

@section('content_header')
    <h1>Administrar Planillas</h1>
@stop

@section('content')
<div class="container-fluid">
    <a href="javascript:history.back()" class="btn btn-outline-warning px-3 mx-2 my-2"><i class="fas fa-arrow-circle-left"></i></a>
    <div class="col-lg-12 order-lg-1">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">{{ __('Crear Planilla') }}</h6>
            </div>
            @if(session('estado'))
            <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
                {{session('estado')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <div class="card-body">
            <form method="POST" action="{{ route('planillas.store') }}" autocomplete="off" novalidate enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <h6 class="heading-small text-muted mb-4">Información de la Planilla</h6>
            <div class="pl-lg-4">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="form-group focused">
                            <label for="nombre" class="form-control-label">{{ __('Número de la Planilla') }}</label>
                            <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" id="nombre" value="{{ old('nombre') }}" placeholder="Número de la Planillan">
                            @error('nombre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group focused">
                            <label for="id_dependencia" class="form-control-label">{{ __('Dependencia') }}</label>
                            <select name="id_dependencia" id="id_dependencia" class="form-control @error('id_dependencia') is-invalid @enderror">
                                <option value="" selected disabled>-- Seleccione una Dependencia --</option>
                                @foreach ($dependencias as $dependencia)
                                    <option value="{{ $dependencia->id }}" {{ old('id_dependencia') == $dependencia->id ? 'selected' : '' }}>
                                        {{ $dependencia->nombre }}
                                    </option>
                                @endforeach
                            </select>
                            @error('id_dependencia')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="form-group focused">
                            <label for="envio" class="form-control-label">{{ __('Tipo de Envío') }}</label>
                            <input type="text" class="form-control @error('envio') is-invalid @enderror" name="envio" id="envio" value="{{ old('envio') }}" placeholder="Tipo de Envío">
                            @error('envio')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group focused">
                            <label for="documento" class="form-control-label">{{ __('Tipo de documento') }}</label>
                            <input type="text" class="form-control @error('documento') is-invalid @enderror" name="documento" id="documento" value="{{ old('documento') }}" placeholder="Tipo de documento">
                            @error('documento')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="form-group focused">
                            <label for="destino" class="form-control-label">{{ __('Autoridad de Destino') }}</label>
                            <input type="text" class="form-control @error('destino') is-invalid @enderror" name="destino" id="destino" value="{{ old('destino') }}" placeholder="Autoridad de Destino">
                            @error('destino')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="form-group focused">
                            <label for="contenido_destino" class="form-control-label">{{ __('Contenido Destino') }}</label>
                            <textarea name="contenido_destino" id="contenido_destino" class="form-control @error('contenido_destino') is-invalid @enderror" placeholder="Contenido Destino" style="min-height: 200px">{{ old('contenido_destino') }}</textarea>
                            @error('contenido_destino')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="form-group focused">
                            <label for="direccion" class="form-control-label">{{ __('Dirección') }}</label>
                            <input type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" id="direccion" value="{{ old('direccion') }}" placeholder="Dirección">
                            @error('direccion')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group focused">
                            <label for="ciudad" class="form-control-label">{{ __('Ciudad') }}</label>
                            <input type="text" class="form-control @error('ciudad') is-invalid @enderror" name="ciudad" id="ciudad" value="{{ old('ciudad') }}" placeholder="Ciudad">
                            @error('ciudad')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group focused">
                            <label for="departamento" class="form-control-label">{{ __('Departamento') }}</label>
                            <input type="text" class="form-control @error('departamento') is-invalid @enderror" name="departamento" id="departamento" value="{{ old('departamento') }}" placeholder="Departamento">
                            @error('departamento')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="form-group focused">
                            <label for="peso" class="form-control-label">{{ __('Peso') }}</label>
                            <input type="text" class="form-control @error('peso') is-invalid @enderror" name="peso" id="peso" value="{{ old('peso') }}" placeholder="Peso">
                            @error('peso')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group focused">
                            <label for="cantidad" class="form-control-label">{{ __('Cantidad') }}</label>
                            <input type="text" class="form-control @error('cantidad') is-invalid @enderror" name="cantidad" id="cantidad" value="{{ old('cantidad') }}" placeholder="Cantidad">
                            @error('cantidad')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="form-group focused">
                            <label for="valor_declarado" class="form-control-label">{{ __('Valor declarado') }}</label>
                            <input type="text" class="form-control @error('valor_declarado') is-invalid @enderror" name="valor_declarado" id="valor_declarado" value="{{ old('valor_declarado') }}" placeholder="Valor Declarado">
                            @error('valor_declarado')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group focused">
                            <label for="seguro" class="form-control-label">{{ __('Seguro') }}</label>
                            <input type="text" class="form-control @error('seguro') is-invalid @enderror" name="seguro" id="seguro" value="{{ old('seguro') }}" placeholder="Seguro">
                            @error('seguro')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group focused">
                            <label for="valor_total" class="form-control-label">{{ __('Valor Total') }}</label>
                            <input type="text" class="form-control @error('valor_total') is-invalid @enderror" name="valor_total" id="valor_total" value="{{ old('valor_total') }}" placeholder="Valor Total">
                            @error('valor_total')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="form-group focused">
                            <label for="usuario_entrega" class="form-control-label">{{ __('Usuario Entrega') }}</label>
                            <select name="usuario_entrega" id="usuario_entrega" class="form-control @error('usuario_entrega') is-invalid @enderror">
                                <option value="" selected disabled>-- Seleccione un Usuario --</option>
                                @foreach ($usuarios as $usuario)
                                    <option value="{{ $usuario->id }}" {{ old('usuario_entrega') == $usuario->id ? 'selected' : '' }}>
                                        {{ $usuario->nombre }}
                                    </option>
                                @endforeach
                            </select>
                            @error('usuario_entrega')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group focused">
                            <label for="fecha_entrega" class="form-control-label">{{ __('Fecha de Entrega') }}</label>
                            <input class="form-control @error('fecha_entrega') is-invalid @enderror" name="fecha_entrega" type="text" id="fecha_entrega" value="{{ $fecha_actual }}" readonly>
                            @error('fecha_entrega')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="form-group focused">
                            <label for="usuario_recibe" class="form-control-label">{{ __('Usuario Recibe') }}</label>
                            <select name="usuario_recibe" id="usuario_recibe" class="form-control @error('usuario_recibe') is-invalid @enderror">
                                <option value="" selected disabled>-- Seleccione un Usuario --</option>
                                @foreach ($usuarios as $usuario)
                                    <option value="{{ $usuario->id }}" {{ old('usuario_recibe') == $usuario->id ? 'selected' : '' }}>
                                        {{ $usuario->nombre }}
                                    </option>
                                @endforeach
                            </select>
                            @error('usuario_recibe')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group focused">
                            <label for="fecha_final" class="form-control-label">{{ __('Fecha Recibe') }}</label>
                            <input class="form-control @error('fecha_final') is-invalid @enderror" name="fecha_final" type="text" id="fecha_final" value="{{ $fecha_actual}}" readonly>
                            @error('fecha_final')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- Button -->
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col text-center">
                            <button type="submit" class="btn btn-primary">
                                <span class="icon text-white-50">Crear Planilla</span>
                            </button>
                        </div>
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
