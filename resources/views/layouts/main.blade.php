<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Club Villaviciosa 
@yield("title")</title>
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
        <x-footer />
    </main>
</body>

</html>
<style>
</style>
