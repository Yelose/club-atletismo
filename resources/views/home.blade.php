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
                El club en palabras de sus atletas
                <x-home.testimonials />
            </section>
            <section>
                <x-home.sponsors />
            </section>
        </div>
    </main>
</div>
@endsection
