<section id='footer'>
    <h2 id='title-footer'>Club de Atletismo de Villaviciosa</h2>
    <div class="footer-container">
        <div id='other-links'>
            @foreach ($links as $link)
            <a href="{{$link->link}}"><img src="{{$link->image}}" alt="{{$link->name}}"></a>
            @endforeach
        </div>
        <div id='fem-cod'>
            <section>
                <h4>Página hecha con</h4>
                <img src="https://femcoders.factoriaf5.org/wp-content/uploads/2021/12/Logo-FemCodersF5-color.png" alt="Factoría F5">
            </section>
            <section>
                <p>Marina</p>
                <p>Laura</p>
                <p>Marybell</p>
                <p>Iria</p>
            </section>
        </div>
    </div>
    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline" id='login'>Log in</a>
</section>
