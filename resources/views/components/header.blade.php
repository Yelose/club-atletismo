<style>
    #nav-menu{
        background-color: #4D2756;
        display: grid;
        grid-template-columns: 20% 80%;
        padding: 10px;
    }

    img.logo-img{
        width: 5vh;
        object-fit: contain;
        border-radius: 50%;
        align-items: center;
    }

    .buttons a{
        color: white,
    }

    div.buttons{
        width: 100%;
        height: 30%;
        background: 4D2756;
        display: flex;
        justify-items: flex-end;
        align-items: center;
        column-gap: 40px;
        color: aliceblue;
</style>


    <section id="nav-menu"> 

        <div id="logo">
        <img class="logo-img" src="https://st2.depositphotos.com/1012338/6938/v/600/depositphotos_69381837-stock-illustration-running-shield.jpg" alt="logo club de atletismo">
    </div>

    <div class="buttons">
        <a href="#home" class="active">HOME</a>
        <a href="#news">HISTORIA</a>
        <a href="#news">CLUB</a>
        <a href="#news">NOTICIAS</a>
        <a href="#contact">LOGROS</a>
        <a href="#about">CALENDARIO</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
        </a>
    </div>
</section>
