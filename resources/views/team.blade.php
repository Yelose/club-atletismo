@extends('layouts.main')
@section("title", "Equipo")
@section("content")
<h1>Conoce al equipo</h1>

    @foreach ($atletas as $atleta)
        <x-atletas.index: $atletas>
    @endforeach
@endsection
