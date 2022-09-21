@extends('layouts.main')
@section("title", "Noticias")
@section("content")
<h1>Noticias</h1>
<div>
    @foreach ($noticias as $noticia)
    <p>{{$noticia->titular}}</p>
    @endforeach
</div>

@endsection
