@extends('plantilla')

@section('seccion')
    <h1>la wea de carritos</h1>
    <h4>id:{{ $pru->id }} </h4>
    <h4>Nombre:{{ $pru->marca }} </h4>
    <h4>Detalle:{{ $pru->modelo }} </h4>
@endsection
