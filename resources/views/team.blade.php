@extends('layouts.main')
@section("title", "Equipo")
@section("content")

<section class = "team-container">
    <h1 class = "title">Conoce al equipo</h1>
    <img src="https://static3.elnortedecastilla.es/www/multimedia/202009/05/media/equipocontrofeo.jpg" alt="" id="foto-equipo">
    <h2>Club de atletismo El Gaiteru</h2>

    <h1>Equipo técnico</h1>
    <div class = "trainers-container">
        <div class></div>
        @foreach ($trainers as $trainer)
        <x-team.trainers.index :trainer="$trainer"/>
        @endforeach
    </div>
    <h1>Atletas</h1>
    <div class = "athletes-container">
        @foreach ($atletas as $atleta)
        <x-team.atletas.index :atleta="$atleta" />
        @endforeach
    </div>
</section>



@endsection
