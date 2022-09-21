<style>
    #nav-menu{
        background-color: #4D2756;
        grid-template-columns: 20% 80%;
        padding: 10px;
        display: flex;
        align-items: center;
      

        
    }

    img.logo-img{
        width: 4vw;
        object-fit: contain;
        border-radius: 50%;
        align-items: center;
    }

    .buttons a{
        color: white;
        display: flex;
        align-items: center;
        text-decoration: none;
        font-size: clamp(15px,1.6vw,20px);
        font-family:Arial, Helvetica, sans-serif;
        

    }

   

 .buttons{
        width: 100%;
        height: 30%;
        background: 4D2756;
        display: flex;
        gap: 2vw;
        justify-content: center;
        margin-right: 4vw;
            }
</style>


    <section id="nav-menu"> 

        <div id="logo">
        <img class="logo-img" src="https://st2.depositphotos.com/1012338/6938/v/600/depositphotos_69381837-stock-illustration-running-shield.jpg" alt="logo club de atletismo">
    </div>

    <div class="buttons">
        <a href="#home" class="active" >HOME</a>
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
