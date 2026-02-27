<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>titulo - @yield('title')</title>
</head>
<body>

    @section('header')
        CABECERA DE WEB (master)
    @show
    <hr>


    <div class="container">
        @yield('content')
    </div>
    <hr>
    @section('footer')
        FOOTER DE WEB (master)
    @show



</body>
</html>
