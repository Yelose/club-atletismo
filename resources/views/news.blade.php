@extends('layouts.main')
@section("title", "Noticias")
@section("content")
<div class="news-container">
    <h1>Noticias</h1>
    @foreach ($noticias as $noticia)
    <x-noticias.index :noticia="$noticia" />
    @endforeach

</div>
@if ($noticias->hasPages(2))
<div class="pagination-container mb-5">
    <!-- {{ $noticias->links() }} -->
    <p>Página {{$noticias->currentPage()}}, mostrando de {{ $noticias->firstItem() }} a {{ $noticias->lastItem() }}
        noticias de {{$noticias->total()}}.</p>
    <p>
        @if ($noticias->currentPage() != 1)
        <a href="{{$noticias->previousPageUrl()}}">&laquo Anterior</a>
        @endif

        @for ($i = 1; $i <= $noticias->lastPage(); $i++)
            <a href="{{$noticias->url($i)}}"> {{$i}} </a>
            @endfor

            @if ($noticias->hasMorePages())
            <a href="{{$noticias->nextPageUrl()}}">Siguiente &raquo</a>
            @endif
    </p>
</div>
@endif
@endsection
