@extends('layouts.main')
@section("title", "Noticias")
@section("content")
<div class="news-container">
    @foreach ($noticias as $noticia)
    <x-noticias.index :noticia="$noticia" />
    @endforeach
</div>

@endsection
