<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <div class="d-flex justify-content-center home-banner">
       <img class="img-fluid full-screen" src="https://media.mybnbwebsite.com/4081/upcoming_events_sunset_03_rs.jpg" alt="Imagen de grupo de superwoman,catwoman, wonderwoman, poison ivy" />
    </div>

    <section id="text">

        <div class="text">
            <h3>Lorem</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora aut quia quo eaque. Rerum modi saepe
                repellendus veritatis? Officia aliquam perferendis tempore doloribus rem delectus veritatis nostrum magnam
                dolorem reprehenderit!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum error voluptate temporibus amet, ipsa tempore
                cumque iusto, maiores cupiditate dolore cum corrupti perspiciatis adipisci accusantium atque eligendi nam rerum
                reiciendis.</p>
        </div>
        <div class="contenedor-foto">
            <img src="https://github.com/lauracastelao/image/blob/main/medallas-definitiva.jpeg?raw=true" alt="nose" id="imagen">
        </div>

    </section>

    <svg width="100%" height="100%" viewBox="30 -50 600 500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
        <path id="path">
            <animate attributeName="d" from="m0,110 h0" to="m0,110 h1100" dur="6.8s" begin="0s" repeatCount="indefinite" />
        </path>
        <text font-size="30" font-family="Montserrat" fill='purple'>
            <textPath xlink:href="#path">"Me siento como en familia,somos un hogar"
            </textPath>
        </text>
    </svg>

</body>

</html>


<style lang="scss" scoped>
    
    .home-banner {
 max-height: 50vh;
 overflow: hidden;

    }
    
    .home-banner img {
        width: 100%;
         margin-top: 3%;
        margin-bottom: 3%;

    }

    

    #text {
        max-width: 1100px;
        margin: auto;
        padding: 100px 15px;
        color: black;
        display: flex;
    }

    #text .contenedor-foto {
        max-width: 400px;
        margin-right: 80px;
    }

    #text .contenedor-foto img {
        padding: 20px;
        width: 40vh;
        height: 30vh;


    }

    #text .text {
        margin: 0 40px;
    }

    #text .text .titulo-seccion {
        font-size: 22px;
        text-transform: uppercase;
        color: black;
        text-decoration: underline;
        text-decoration-color: rgb(0, 0, 0);
        text-decoration-thickness: 5px;
    }

    #text .text h3 {
        font-size: 18px;
        font-weight: 500;
        text-transform: uppercase;
        margin-bottom: 20px;
        letter-spacing: 1px;
    }

    #text .text p {
        font-size: 14px;
        line-height: 25px;
        color: rgb(0, 0, 0);
        margin-bottom: 12px;
    }



    svg {
        width: 40vh;
        color: black;

    }

    #path {

        padding-right: 5vh;
    }

    ul,
    li {
        padding: 0;
        margin: 0;
        list-style: none inside;
    }

    ul.slider {
        position: relative;
        /*Necesitamos que el ul sea relativo*/
    }

    ul.slider li {
        opacity: 0;
        /*Ocultamos todos los <li>*/
        transition: opacity .5s;
        position: absolute;
        /*Posicionamos en absoluto los <li>*/
        left: 0px;
        top: 0px;
        margin: 50px;
        padding: 50px;
        border: 2px solid red;
        background: #fff;
    }

    ul.slider li:first-child {
        opacity: 1;
        /*Mostramos el primer <li>*/
    }

    ul.slider li:target {
        opacity: 1;
        /*Mostramos el <li> al que apunta el enlace*/
    }

    nav {
        position: relative;
        top: 200px;
        left: 50px;
    }
</style>
