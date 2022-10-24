@extends('layouts.main')
@section("title", "Inicio")
@section("content")
<div class="principal-container">
    <div id="cookies">
        <p>Aquí va el texto de las cookies.</p>
        <strong onclick="cookies.remove()">x</strong>
    </div>
    <x-home.slider />
    <h1>Club de Atletismo El Gaitero</h1>
    <main>
        <aside>
            <h4>Últimas noticias</h4>
            @foreach ($noticias as $noticia)
            <x-noticias.aside :noticia="$noticia" />
            @endforeach
        </aside>
        <div>
            <section id="text">
                <x-home.intro />
            </section>

            <section id="testimonials">
                <h3>El club en palabras de sus atletas</h3>
                <div class="slideshow-container">
                    @foreach ($testimonials as $testimonial)
                    <x-home.testimonials :testimonial="$testimonial" />
                    @endforeach
                </div>

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>
            </section>

            <section id="sponsors">
                @foreach ($sponsors as $sponsor)
                <x-home.sponsors :sponsor="$sponsor" />
                @endforeach
            </section>
        </div>
    </main>
</div>
<script>
    var slideIndex = 1;
    showSlides(slideIndex);
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }
    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex - 1].style.display = "block";
    }
    const cookies = document.getElementById('cookies');

</script>

@endsection
