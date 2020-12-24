<!-- Hereda la plantilla definida. -->
@extends('layouts.template')

<!-- ............................................... -->
<!-- Título de la pestaña -->
@php
    $title = "Contact";
@endphp
<!-- ............................................... -->

<!-- ............................................... -->
<!-- Encabezado -->
@section('header')
    <h1 class="uk-heading-small header-text">Contact</h1>
    <p>
        Aquí es donde pondría mi correo electrónico... pero todavía no por si acaso.
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
    <h2 class="header-text">Index</h2>
    <p>Página principal</p>
    <a href="/">
        <button class="uk-button uk-button-primary">Go!</button>
    </a>
@endsection
<!-- ............................................... -->