@extends('layouts.main')
@section("title", "Equipo")
@section("content")

<section class="team-container">
    <h1>Conoce al equipo</h1>
    <img src="https://static3.elnortedecastilla.es/www/multimedia/202009/05/media/equipocontrofeo.jpg" alt=""
        id="foto-equipo">
    <h2>Club de atletismo El Gaiteru</h2>

    <h3>Equipo técnico</h3>
    <div class="trainers-container">
        <div class></div>
        @foreach ($trainers as $trainer)
        <x-team.trainers.index :trainer="$trainer" />
        @endforeach
    </div>
    <h3>Atletas</h3>
    <div class="athletes-container">
        @foreach ($atletas as $atleta)
        <x-team.atletas.index :atleta="$atleta" />
        @endforeach
    </div>
</section>



@endsection
