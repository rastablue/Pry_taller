@extends('plantilla')

@section('seccion')

<h1>este es mi equipo de trabajo</h1>

@foreach($equipo as $item)
<a href={{ route('nosotros', $item) }} class="h4 text-danger">{{$item}}</a><br>
@endforeach

@if(!empty($nombre))
    @switch($nombre)

        @case($nombre=='Luddy')
            <h2 class="mt-5">El nombre es {{ $nombre }}:</h2>
            <p>{{ $nombre }} Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Officia repellendus
                natus numquam sint accusantium laborum
                similique dolores vel incidunt laboriosam,
                est quibusdam, error doloremque laudantium
                nostrum eum rerum in iure.</p>
            @break

        @case($nombre=='Martin')
            <h2 class="mt-5">El nombre es {{ $nombre }}:</h2>
            <p>{{ $nombre }} Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Officia repellendus
                natus numquam sint accusantium laborum
                similique dolores vel incidunt laboriosam,
                est quibusdam, error doloremque laudantium
                nostrum eum rerum in iure.</p>
            @break

    @endswitch
@endif

@endsection
