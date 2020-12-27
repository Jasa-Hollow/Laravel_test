<!-- Hereda la plantilla definida. -->
@extends('../layouts.Tposts')

<!-- ............................................... -->
<!-- Título de la pestaña -->
@php
    $title = "Posts";
@endphp
<!-- ............................................... -->

<!-- ............................................... -->
<!-- Contenido de las vistas posts -->
@section('conten')
    <form method="post" action="/post/">
        <fieldset class="uk-fieldset">

            <legend class="uk-legend">
                Create post
            </legend>

            <div class="uk-margin">
                <input class="uk-input" name="title" type="text" placeholder="Title of video" autocomplete="off">
                <!--  -->
                {{ csrf_field() }}
            </div>

            <div class="uk-margin">
                <textarea class="uk-textarea" name="zelda" rows="5" placeholder="Embed link of the video"></textarea>
                {{ csrf_field() }}
            </div>

            <button type="submit" class="uk-button uk-button-primary"> 
                Send 
            </button>
        </fieldset>
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
@endsection
<!-- ............................................... -->