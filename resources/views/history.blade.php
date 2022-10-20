@extends('layouts.main')
@section("title", "Historia")
@section("content")

<div class="history-container">
    <figure>
        <img src="{{$quiens->image}}" alt="">
    </figure>

    <h1 class="title">{{$quiens->titulo}}</h1>

    <h3 class="resumen">{{$quiens->resumen}}</h3>
</div>

<br><br>
<div>
@foreach ($cronologias as $cronologia)
    <x-history.cronologia.index :cronologia="$cronologia" />
@endforeach
</div>
@endsection
