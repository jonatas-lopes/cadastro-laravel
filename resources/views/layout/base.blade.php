<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name')}}::@yield('title')</title>
</head>
<body>

    <div class="conteiner">
    @yield('conteudo')
    </div>
    <footer>
        <p>Digital - 2020</p>
    </footer>
</body>
</html>
