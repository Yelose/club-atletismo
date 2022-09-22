<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/app.css">
    <title>Club Villaviciosa - @yield("title")</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <x-header />
    <main>
        @yield("content")
        <x-footer />
    </main>
</body>

</html>
<style>
    * {
        margin: 0;
        padding: 0;
    }
</style>
