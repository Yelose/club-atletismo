@extends('layouts.main')
@section("title", "Noticias")
@section("content")
<div class="news-container">

    <div class="new-container">
        <h1>{{$noticia->titular}}</h1>
        <figure>
            <img src="/images/{{ $noticia->image }}" width="500px">
            <figcaption>
                {{$noticia->piefoto}}
            </figcaption>
        </figure>
        <h2>{{$noticia->subtitulo}}</h2>
        <p class="news-description">
            <?php
            echo nl2br($noticia->noticia);
            ?>
        </p>

        <p>15/06/2022</p>

        <a href="/news">Volver</a>
    </div>
</div>

@endsection
