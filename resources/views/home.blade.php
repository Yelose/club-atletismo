@extends('layouts.main')
@section("title", "Inicio")
@section("content")
<div class="principal-container">
    <div id="cookies">
        <p>Esta página lleva las mínimas cookies por ley.</p>
        <p onclick="cookie()">--x--</p>
    </div>
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
                <h3>El club para sus atletas</h3>
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
        var dots = document.getElementsByClassName("dot");
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

</script>

@endsection
