@extends('layouts.main')
@section("title", "Noticias")
@section("content")
<h1>Noticias</h1>
<div>
    @foreach ($noticias as $noticia)
    <x-noticias.aside :noticia="$noticia" />
    @endforeach
</div>

@endsection
