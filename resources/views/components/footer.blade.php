<section id='footer'>
    <h2 id='title-footer'>Club de Atletismo de Villaviciosa</h2>
    <div id='other-links'>
        @foreach ($links as $link)
        <a href="{{$link->link}}"><img src="{{$link->image}}" alt="{{$link->name}}"></a>
        @endforeach
        <!-- <a href="http://fasatle.org/faa/calendar/"><img src="https://scontent.fbio3-1.fna.fbcdn.net/v/t39.30808-6/295051103_541072890893480_8364037363715391393_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=WxyVIGXBBXUAX9HEKuf&_nc_ht=scontent.fbio3-1.fna&oh=00_AT_5K9VZTdVVpM0e93wTd0RRH8LHAsiD2S0gR_7MZH0W4A&oe=632F03DF" alt=""></a>
        <a href="http://fasatle.org/faa/calendar/"><img src="https://cdn-icons-png.flaticon.com/512/906/906330.png" alt=""></a>
        <a href="https://www.rfea.es/"><img src="https://habber.com/wp-content/uploads/2022/08/Imagen-WEB-clientes-500x500-1.jpg" alt=""></a> -->
    </div>
    <div id='fem-cod'>
        <p>Marina - Laura - Marybell - Iria - Verónica</p>
        <img src="https://femcoders.factoriaf5.org/wp-content/uploads/2021/12/Logo-FemCodersF5-color.png" alt="#">
    </div>
    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline" id='login'>Log in</a>
</section>
