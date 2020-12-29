<!-- Hereda la plantilla definida. -->
@extends('layouts.template')
@extends('layouts.navbar')

<!-- ............................................... -->
<!-- Título de la pestaña -->
@php
    $title = "About";
    $nav = ["/", "/about", "/contact", "/post/"];
@endphp
<!-- ............................................... -->

<!-- ............................................... -->
<!-- Encabezado -->
@section('navbar')
    @section('header')
    <h1 class="uk-heading-small header-text">About</h1>
    <p>
        Mi nombre es Jasa, y soy un programador super novato.
    </p>
    @endsection
@endsection
<!-- ............................................... -->

<!-- ............................................... -->
@section('card1')
    <h2 class="header-text">Index</h2>
    <p>Página principal</p>
    <a href="/" class="icon-btn">
        <i class="fas fa-home fa-4x"></i>
    </a>
@endsection
<!-- ............................................... -->

<!-- ............................................... -->
@section('card2')
    <h2 class="header-text">Contact</h2>
    <p>Contáctame así es</p>
    <a href="/contact" class="icon-btn">
        <i class="fas fa-feather fa-4x">Go!</i>
    </a>
@endsection
<!-- ............................................... -->

<!-- ............................................... -->
@section('card3')
    <h2 class="header-text">Posts</h2>
    <p>Ver los videos de "Hilos de Fuego"</p>
    <a href="/post/" class="youtube-btn">
        <i class="fab fa-youtube fa-4x"></i>
    </a>
@endsection
<!-- ............................................... -->

<!-- ............................................... -->
<!-- Cuarta tarjeta -->
@section('card4')
    <h2 class="header-text">About me</h2>
    <p> 
        Mi nombre es Jasa, y tengo actualmente en el desarrollo de esta aplicación 20 años; soy un programador novato, y estoy estudiando en una universidad.
        La universidad se llama ULS (Universidad Luterana Salvadoreña).
    </p>
    <p>
        Me encanta jugar en mi Nintendo Switch, mi videojuego favorito se llama "Xenoblade 2".
    </p>
    <p>
        Soy autor de la novela "Fire Law Le Begin of Dark", y actualmente estoy escribiendo la secuela, mi segundo libro!
    </p>
@endsection
<!-- ............................................... -->