<div class="new-container">
    <h1>{{$noticia->titular}}</h1>
    <figure>
        <img src="{{$noticia->image}}" alt="imagen de ejemplo">
        <figcaption>
            {{$noticia->piefoto}}
        </figcaption>
    </figure>
    <h2>{{$noticia->subtitulo}}</h2>
    <p class="news-description">
        <?php
        echo nl2br($noticia->noticia);
        ?>
    </p>

    <p>15/06/2022</p>
    <a href="/noticia/{{$noticia->id}}">Leer más</a>
</div>
