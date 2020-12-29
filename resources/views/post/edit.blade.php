<!-- Hereda la plantilla definida. -->
@extends('../layouts.Tposts') @extends('../layouts.navbar')

<!-- ............................................... -->
<!-- Título de la pestaña -->
@php
    $title = "Hilos de Fuego";
    $nav = ["../../", "../../about", "../../contact", "../"];
@endphp
<!-- ............................................... -->

<!-- ............................................... -->
<!-- Formulario de actualizar. -->
@section('conten')
    <hr class="uk-divider-icon">
    <form method="post" action="/post/{{ $video->id }}">
        <div class="uk-card uk-card-default uk-card-body">
            <fieldset class="uk-fieldset">

            <legend class="uk-legend">
                Edit post
            </legend>

            <div class="uk-margin uk-text-left">
                <legend class="uk-legend"> Title </legend>
                <input class="uk-input" name="title" value="{{ $video->title }}" type="text" placeholder="Title of video" autocomplete="off">
                <!--  -->
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
            </div>

            <div class="uk-margin uk-text-left">
                <legend class="uk-legend"> Embed Link </legend>
                <textarea class="uk-textarea" name="zelda" rows="5" placeholder="Embed link of the video">{{ $video->zelda }}</textarea>
            </div>

            <button type="submit" class="uk-button uk-button-primary"> 
                Update video
            </button>
        </fieldset>
        </div>
    </form>
    @if (count($errors) > 0)
        @foreach($errors->all() as $error)
            <div class="uk-alert-warning" uk-alert>
                <a class="uk-alert-close" uk-close></a>
                <h3>Error!</h3>
                <p>{{ $error }}</p>
            </div>
        @endforeach
    @endif
    <hr class="uk-divider-icon">
@endsection
<!-- ............................................... -->

<!-- ............................................... -->
<!-- Video seleccionado. -->
@section('videos')
        <div class="uk-width-1">
            <div class="uk-card uk-card-default uk-card-body">
                <h2 class="header-text">{{ $video->title }}</h2>
                <iframe width="900" height="500" src="{{ $video->zelda }}" 
                        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
                        gyroscope; picture-in-picture" allowfullscreen>
                </iframe>
            </div>
            <hr class="uk-divider-icon">
            <form method="post" action="/post/{{ $video->id }}">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="uk-button uk-button-danger"> 
                    Delete video
                </button>
            </form>
        </div>
@endsection
<!-- ............................................... -->