@extends('layouts.main')
@section("title", "Equipo")
@section("content")

<section id="athletes">
    <h1>Conoce al equipo</h1>
    <img src="https://static3.elnortedecastilla.es/www/multimedia/202009/05/media/equipocontrofeo.jpg" alt="" id="foto-equipo">
</section>

    @foreach ($atletas as $atleta)
    <x-team.atletas.index :atleta="$atleta" />
    @endforeach
@endsection
