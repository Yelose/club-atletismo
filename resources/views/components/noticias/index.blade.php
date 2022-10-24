<div class="new-container">
    <h2>{{$noticia->titular}}</h2>
    <figure>
        <img src="/images/{{ $noticia->image }}" width="500px">
        <figcaption>
            {{$noticia->piefoto}}
        </figcaption>
        <p>{{$noticia->subtitulo}}</p>
    </figure>

    <p>15/06/2022</p>
    <a href="/noticia/{{$noticia->id}}">Leer más</a>
</div>
