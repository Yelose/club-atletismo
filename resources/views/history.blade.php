@extends('layouts.main')
@section("title", "Historia")
@section("content")
<div class="history-container">
    
    <img src="{{$quiens->image}}" alt="">

    <h1>{{ $quiens->titulo}}</h1>

    <h3>{{ $quiens->resumen}}</h3>

</div>


@foreach ($cronologias as $cronologia)
    <x-history.cronologia.index :cronologia="$cronologia" />
@endforeach

@endsection
