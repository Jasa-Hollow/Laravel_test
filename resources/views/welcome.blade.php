<!-- Hereda la plantilla definida. -->
@extends('layouts.template')

<!-- 
    Se llama la primera sección.
    Todo lo que vaya dentro de esa instrucción,
    será el contenido de la estructura de la plantilla.
-->

<!-- ............................................... -->
<!-- Encabezado -->
@section('header')
    <h1 class="uk-heading-small header-text">Index</h1>
    <p>Bienvenido a una página creada con Laravel, es mi primer
    proyecto utilizando este entorno de desarrollo, y la verdad estoy
    muy emocionado.
    </p>
@endsection
<!-- ............................................... -->

<!-- ............................................... -->
<!-- Primera tarjeta -->
@section('card1')
    <h2 class="header-text">About</h2>
    <p>Acerca de don Yo</p>
    <a href="/about">
        <button class="uk-button uk-button-primary">Go!</button>
    </a>
@endsection
<!-- ............................................... -->

<!-- ............................................... -->
<!-- Segunda tarjeta -->
@section('card2')
    <h2 class="header-text">Contact</h2>
    <p>Contáctame así es</p>
    <a href="/contact">
        <button class="uk-button uk-button-primary">Go!</button>
    </a>
@endsection
<!-- ............................................... -->