<style>
    #nav-menu{
        background-color: #4D2756;
        display: grid;
        grid-template-columns: 20% 80%;
        padding: 10px;
    }

    .logo{
        width: 80%;
        object-fit: contain;
        border-radius: 50%;
    }
    div.buttons{
        width: 100%;
        height: 30%;
        background: 4D2756;
        display: flex;
        justify-items: flex-end;
        align-items: center;
        column-gap: 40px;
    }

    .home{
        border: 3px solid #e1bee7;
        border-radius: 5px;
    }

    .history{
        border: 3px solid #e1bee7;
        border-radius: 5px; 
    }

    .team{
        border: 3px solid #e1bee7;
        border-radius: 5px;
    }

    .news{
        border: 3px solid #e1bee7;
        border-radius: 5px;
    }

    .achievements{
        border: 3px solid #e1bee7;
        border-radius: 5px;
    }
</style>


    <section id="nav-menu"> 
        
    <div id="logo">
        <img class="logo-img" src="" alt="logo club de atletismo">
    </div>

    <div class="buttoms">
        <button class="home">HOME
            <a href="{{route('home')}}"></a>
        </button>

        <button class="history">HISTORIA
            <a href="{{route('history')}}"></a>
        </button>

        <button class="team">EQUIPO
            <a href="{{route('team')}}"></a>
        </button>

        <button class="news">NOTICIAS
            <a href="{{route('news')}}"></a>
        </button>

        <button class="achievements">LOGROS
            <a href="{{route('achievements')}}"></a>
        </button>
    </div>
</section>
