@extends('layouts.main')
@section("title", "Inicio")
@section("content")
<div class="principal-container">
    <x-home.slider />
    <main>
        <aside>
            @foreach ($noticias as $noticia)
            <x-noticias.aside :noticia="$noticia" />
            @endforeach
        </aside>
        <div>
            <section id="text">
                <x-home.intro />
            </section>
            <section>
                <x-home.sponsors />
            </section>
            <section id="testimonials">
                <x-home.testimonials />
            </section>
        </div>
    </main>
</div>
@endsection
