@extends('layouts.main')
@section("title", "Noticias")
@section("content")
<div class="news-container">
    @foreach ($noticias as $noticia)
    <x-noticias.index :noticia="$noticia" />
    @endforeach

</div>
@if ($noticias->hasPages(2))
<div class="d-flex justify-content-center mb-5">
    {{ $noticias->links() }}
    <a href="{{$noticias->nextPageUrl()}}">Siguiente</a>
</div>
@endif
@endsection
