@extends('layouts.main')
@section("title", "Historia")
@section("content")


<div class="history.container">
    <h1>{{ $quiens->titulo}}</h1>
    <hr>
    <h2>{{ $quiens->image}}</h2>
</div>
<hr>
<h3>{{ $quiens->resumen}}</h3>
@endsection


@section("content")
<div class="history.container">
    <h1>{{ $cronologia->fecha}}</h1>
    <h3>{{ $cronologia->resumen}}</h3>
</div>
@endsection


