<footer id='footer'>
    <h2 id='title-footer'>Club de Atletismo de Villaviciosa</h2>
    <div class="footer-container">
        <div id='other-links'>
            <section class="external-links-container">
                <h4>Enlaces de interés</h4>
                <div class="links">
                    @foreach ($links as $link)
                    <a href="{{$link->link}}"><img src="{{$link->image}}" alt="{{$link->name}}"></a>
                    @endforeach
                </div>
            </section>
        </div>
        <div id='fem-cod'>
            <section>
                <h4>Página hecha por</h4>
                <img src="https://femcoders.factoriaf5.org/wp-content/uploads/2021/12/Logo-FemCodersF5-color.png" alt="Factoría F5">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/985px-Laravel.svg.png" alt="Laravel">
            </section>
            <section>
                <p>Marina</p>
                <p>Laura</p>
                <p>Marybell</p>
                <p>Iria</p>
            </section>
        </div>
    </div>
    <a href="{{ route('login') }}" class="login" id='login'>Entrar como Administrador</a>
</footer>
