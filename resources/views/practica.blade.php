@extends('plantilla')

@section('seccion')
    <h1>tablitas de db</h1>
    <div class="container my-4">
        <h1 class="display-4">Notas</h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#Id</th>
                <th scope="col">Marca</th>
                <th scope="col">Modelo</th>
                <th scope="col">Placa</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>

            @foreach ($carros as $meti)

              <tr>
                <th scope="row">
                    <a href="{{ route('notas.carros', $meti) }}">
                        {{ $meti->id }}
                    </a>
                </th>
                <td>{{ $meti->marca }}</td>
                <td>{{ $meti->modelo }}</td>
                <td>{{ $meti->placa }}</td>
                <td>
                    <a href="{{ route('notas.editaCarros', $meti) }} " class="btn btn-warning btn-sm">Editar</a>

                </td>
              </tr>

            @endforeach

            </tbody>
          </table>
    </div>
@endsection
