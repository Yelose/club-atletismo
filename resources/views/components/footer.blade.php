<style>
    #footer{
        position: absolute;
        bottom: 0;
        width: 100%;
        background-color: #4D2756;
        text-align: center;
        color: white;
        text-shadow: grey 1px 1px 1px;
    }

    #login {
        background-color: white;
        float: right;
        margin: 20px;
    }

    #other-links{
        color: grey;
        display: flex;
        justify-content: center;
        gap: 5vw;
    }
</style>

<section id='footer'>
    <h2>Club de Atletismo de Villaviciosa</h2>
    <div id='other-links'>
        <a href="#">link 1</a>
        <a href="#">link 2</a>
        <a href="#">link 3</a>
    </div>
    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline" id='login'>Log in</a>
</section>

