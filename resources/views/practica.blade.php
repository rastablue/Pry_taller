@extends('plantilla')

@section('seccion')
    <h1>tablitas de db</h1>
    <div class="container my-4">
        <h1 class="display-4">Notas</h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#id</th>
                <th scope="col">marca</th>
                <th scope="col">modelo</th>
                <th scope="col">placa</th>
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
                <td>@mdo</td>
              </tr>

            @endforeach

            </tbody>
          </table>
    </div>
@endsection
