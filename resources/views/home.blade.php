@extends('layouts.main')
@section("title", "Inicio")
@section("content")
<div class="principal-container">
    <x-home.slider />
    <main>
        <aside>
            <h2>Últimas noticias</h2>
            @foreach ($noticias as $noticia)
            <x-noticias.aside :noticia="$noticia" />
            @endforeach
        </aside>
        <div>
            <section id="text">
                <x-home.intro />
            </section>

            <section id="testimonials">
                @foreach ($testimonies as $testimony)
                <x-home.testimonials :testimony="$testimony" />
                @endforeach

            </section>
            <section>

                @foreach ($sponsors as $sponsor)
                <x-home.sponsors :sponsor="$sponsor" />

                @endforeach
            </section>
        </div>
    </main>
</div>
@endsection
