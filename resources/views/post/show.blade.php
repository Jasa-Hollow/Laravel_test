<!-- Hereda la plantilla definida. -->
@extends('../layouts.Tposts') @extends('../layouts.navbar')

<!-- ............................................... -->
<!-- Título de la pestaña -->
@php
    $title = "Hilos de Fuego";
    $nav = ["../", "../about", "../contact", "/post/"];
@endphp
<!-- ............................................... -->

<!-- ............................................... -->
<!-- Video seleccionado. -->
@section('videos')
        <div class="uk-width-1">
            <div class="uk-card uk-card-default uk-card-body">
                <h2 class="header-text">{{ $video->title }}</h2>
                <hr class="uk-divider-icon">
                <iframe width="900" height="500" src="{{ $video->zelda }}" 
                        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
                        gyroscope; picture-in-picture" allowfullscreen>
                </iframe>
            </div>
        </div>
@endsection
<!-- ............................................... -->