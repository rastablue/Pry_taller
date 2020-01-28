@extends('plantilla')

@section('seccion')

<h1>Editar Carros</h1>

@if (session('mensaje'))

    <div class="alert alert-success">{{ session('mensaje') }}</div>

@endif

<form action="{{ route('notas.updateCarros', $nota->id) }} " method="POST">

    @method('PUT')
    @csrf

    @error('marca')

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            La marca es requerida
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    @enderror

    @if ($errors->has('modelo'))

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        El modelo es requerido
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    @endif

    @if ($errors->has('placa'))

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        La placa es requerida
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    @endif

    <input type="text" name="marca" placeholder="{{ $nota->marca }}" class="form-control mb-2">
    <input type="text" name="modelo" placeholder="{{ $nota->modelo }}" class="form-control mb-2">
    <input type="text" name="placa" placeholder="{{ $nota->placa }}" class="form-control mb-2">
    <button class="btn btn-warning btn-block" type="submit">Editar</button>
</form>

@endsection
