@extends('layouts.main')
@section("title", "Historia")
@section("content")

<div class="history-container">
    <figure>
        <img src="{{$quiens->image}}" alt="">
    </figure>

    <h1>{{$quiens->titulo}}</h1>
    <h3>{{$quiens->resumen}}</h3>
</div>

<div class="cronologias-container">
    @foreach ($cronologias as $cronologia)
    <x-history.cronologia.index :cronologia="$cronologia" />
    @endforeach
</div>
@endsection
