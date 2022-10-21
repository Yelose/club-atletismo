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
    {{-- <div class="d-flex justify-content-center mt-5 h-100">
        <div class="d-flex align-items-center align-self-center card p-3 text-center cookies"><img src="https://i.imgur.com/Tl8ZBUe.png" width="50"><span class="mt-2">We use third party cookies to personalize content, ads and analyze site traffic.</span><a class="d-flex align-items-center" href="#">Learn more<i class="fa fa-angle-right ml-2"></i></a>
            <button
                class="btn btn-dark mt-3 px-4" type="button">Okay</button>
        </div>
    </div> --}}

   

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
