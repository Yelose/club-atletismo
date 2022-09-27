<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club Villaviciosa - @yield("title")</title>
    <!-- <link rel="stylesheet" href="../../css/app.css">
    <script src="{{ asset('js/app.js') }}" defer></script> -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="main-layout">
    <header>
        <x-header />
    </header>
    <main>
        @yield("content")
        @include("components.footer")
    </main>
</body>

</html>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    .main-layout {
        display: flex;
        flex-direction: column;
        height: 100vh;
    }

    .main-layout main {
        display: flex;
        flex-direction: column;
        flex: 1;
        overflow-y: auto;
    }
</style>