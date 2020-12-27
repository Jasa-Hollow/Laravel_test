<!-- Hereda la plantilla definida. -->
@extends('layouts.template')

<!-- ............................................... -->
<!-- Título de la pestaña -->
@php
    $title = "About";
@endphp
<!-- ............................................... -->

<!-- ............................................... -->
<!-- Encabezado -->
@section('header')
    <h1 class="uk-heading-small header-text">About</h1>
    <p>
        Mi nombre es Jasa, y soy un programador super novato.
    </p>
@endsection
<!-- ............................................... -->

<!-- ............................................... -->
<!-- Primera tarjeta -->
@section('card1')
    <h2 class="header-text">Index</h2>
    <p>Página principal</p>
    <a href="/" class="icon-btn">
        <i class="fas fa-home fa-4x"></i>
    </a>
@endsection
<!-- ............................................... -->

<!-- ............................................... -->
<!-- Segunda tarjeta -->
@section('card2')
    <h2 class="header-text">Contact</h2>
    <p>Contáctame así es</p>
    <a href="/contact" class="icon-btn">
        <i class="fas fa-feather fa-4x">Go!</i>
    </a>
@endsection
<!-- ............................................... -->

<!-- ............................................... -->
<!-- Tercera tarjeta -->
@section('card3')
    <h2 class="header-text">Posts</h2>
    <p>Ver los videos de "Hilos de Fuego"</p>
    <a href="/post/" class="youtube-btn">
        <i class="fab fa-youtube fa-4x"></i>
    </a>
@endsection
<!-- ............................................... -->