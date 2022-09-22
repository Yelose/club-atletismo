@extends('layouts.main')
@section("title", "Equipo")
@section("content")
<style>
    #athletes {
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    #foto-equipo img{
        width: 100%;
        width: 60vw;
        height: 25.5vw;
        padding: 2px;
        border-radius: 5px;
    }

    #foto-equipo img:hover {
        transition: all 0.5s ease-in-out;
        -webkit-transform: scale(1.3);
        transform: scale(1.3);
    }
</style>
</style>

<section id='athletes'>
    <h1>¡Nos presentamos! ¡Somos el Club de Atletismo de Villaviciosa!</h1>
    <div id='foto-equipo'>
        <img src="https://static3.elnortedecastilla.es/www/multimedia/202009/05/media/equipocontrofeo.jpg" alt="">
    </div>
    <h2>Atletas</h2>
</section>
@endsection
