<!-- Hereda la plantilla definida. -->
@extends('layouts.template') @extends('layouts.navbar')

<!-- 
    Todo lo que vaya dentro de esas instrucción,
    será el contenido de la estructura de la plantilla.
-->

<!-- ............................................... -->
<!-- Título de la pestaña, y barra de navegación. -->
@php
    $title = "Home";
    $nav = ["/", "/about", "/contact", "/post/"];
@endphp
<!-- ............................................... -->

<!-- ............................................... -->
<!-- Encabezado -->
@section('navbar')
    @section('header')
    <h1 class="uk-heading-small header-text">Index</h1>
    <p> Bienvenido a una página creada con Laravel, es mi primer
        proyecto utilizando este entorno de desarrollo, y la verdad estoy
        muy emocionado. </p>
    @endsection
@endsection
<!-- ............................................... -->

<!-- ............................................... -->
<!-- Primera tarjeta -->
@section('card1')
    <h2 class="header-text">About</h2>
    <p>Acerca de don Yo</p>
    <a href="/about" class="icon-btn"> <i class="fas fa-user-astronaut fa-4x">Go!</i> </a>
@endsection
<!-- ............................................... -->

<!-- ............................................... -->
<!-- Segunda tarjeta -->
@section('card2')
    <h2 class="header-text">Contact</h2>
    <p>Contáctame así es</p>
    <a href="/contact" class="icon-btn"> <i class="fas fa-feather fa-4x">Go!</i> </a>
@endsection
<!-- ............................................... -->

<!-- ............................................... -->
<!-- Tercera tarjeta -->
@section('card3')
    <h2 class="header-text">Posts</h2>
    <p>Ver los videos de "Hilos de Fuego"</p>
    <a href="/post/" class="youtube-btn"> <i class="fab fa-youtube fa-4x"></i> </a>
@endsection
<!-- ............................................... -->

<!-- ............................................... -->
<!-- Cuarta tarjeta -->
@section('card4')
    <hr class="uk-divider-icon">
@endsection
<!-- ............................................... -->