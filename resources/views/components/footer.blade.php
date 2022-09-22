<style>
    #footer{
        width: 100%;
        background-color: #4D2756;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    #title-footer {
        color: white;
        text-shadow: grey 1px 1px 1px;
        width: fit-content;
    }

    #login {
        color: white;
        width: 100%;
        margin-right: 20px;
        margin-bottom: 10px;
        text-align: right;
    }

    #other-links{
        color: grey;
        display: flex;
        justify-content: center;
        gap: 5vw;
        color: white;
    }
    #other-links a {
        width: 5vw;
        height: 5vw;
    }
    #other-links a img {
        width: 100%;
    }

    #fem-cod {
        color:  gray;
        font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    #fem-cod img {
        width: 100%;
        width: 4vw;
        height: 4vw;
        background-color: white;
        padding: 2px;
        border-radius: 5px;
    }

</style>

<section id='footer'>
    <h2 id='title-footer'>Club de Atletismo de Villaviciosa</h2>
    <div id='other-links'>
        <a href="http://fasatle.org/faa/calendar/"><img src="https://scontent-mad1-2.xx.fbcdn.net/v/t39.30808-6/295051103_541072890893480_8364037363715391393_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=WxyVIGXBBXUAX-v_0PZ&_nc_ht=scontent-mad1-2.xx&oh=00_AT_qmcIoFIBsjc_Fz5m0l8T7GK5u7SNrgD7LzXXMWCQ6aQ&oe=6330FE1F" alt=""></a>
        <a href="http://fasatle.org/faa/calendar/"><img src="https://cdn-icons-png.flaticon.com/512/906/906330.png" alt="Logo calendario"></a>
        <a href="https://www.rfea.es/"><img src="https://brandemia.org/sites/default/files/inline/images/rfea_logo.jpg" alt=""></a>
    </div>
    <div id='fem-cod'>
        <p>Marina - Laura - Marybell - Iria - Verónica</p>
        <img src="https://femcoders.factoriaf5.org/wp-content/uploads/2021/12/Logo-FemCodersF5-color.png" alt="#">
    </div>
    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline" id='login'>Log in</a>
</section>

