<!-- Hereda la plantilla definida. -->
@extends('../layouts.Tposts')

<!-- ............................................... -->
<!-- Título de la pestaña -->
@php
$title = "Hilos de Fuego";
@endphp
<!-- ............................................... -->

<!-- ............................................... -->
<!-- Encabezado -->
@section('videos')
    @foreach ($videos as $video)
        <div class="uk-width-1-2@m">
                <div class="uk-card uk-card-default uk-card-body">
                    <h2 class="header-text">{{ $video->title }}</h2>
                    <iframe width="500px" height="300px" src="{{ $video->zelda }}" 
                        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
                        gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                </div>
            </div>
    @endforeach
@endsection
<!-- ............................................... -->
