@extends('layouts.main')
@section("title", "Historia")
@section("content")


<div class="history-container">
    <h1>{{ $quiens->titulo}}</h1>
    <img src="{{$quiens->image}}" alt="">
</div>
    <h3>{{ $quiens->resumen}}</h3>


{{-- @foreach ($cronologias as $cronologia)
    <x-history.cronologia.index :cronologia="$cronologia" />
@endforeach --}}

@foreach ($cronologias as $cronologia)
    {{$cronologia->fecha}}
@endforeach

@endsection
