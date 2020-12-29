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
<!-- Encabezado -->
@section('videos')
@foreach ($videos as $video)
<div class="uk-width-1-2@m">
    <div class="uk-card uk-card-default uk-card-body uk-background-secondary">
        <h2 class="header-text allvid">{{ $video->title }}</h2>
        <hr class="uk-divider-icon">
        <iframe width="500px" height="300px" src="{{ $video->zelda }}" frameborder="0" 
            allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
        </iframe>
        <hr class="uk-divider-icon">
        <div class="uk-inline">
            <button class="uk-button uk-button-primary" type="button">Actions</button>
            <div uk-dropdown>
                <ul class="uk-nav uk-dropdown-nav">
                    <li class="uk-nav-header">Choose one</li>
                    <li><a href="/post/{{ $video->id }}">See it!</a></li>
                    <li class="uk-nav-divider"></li>
                    <li><a href="/post/{{ $video->id }}/edit">Edit</a></li>
                    <li class="uk-nav-divider"></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
<!-- ............................................... -->
