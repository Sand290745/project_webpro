<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> @yield('title') </title>
        <link rel="stylesheet" href="{{ asset('/css/style.css')}}">
    </head>
    <body>
        <header>
            <h1>@yield('title') </h1>
            <nav>
                <a href=""><strong>Home</strong></a>
                <a href=""><strong>Exo</strong></a>
                <a href=""><strong>Nct</strong></a>
                <a href=""><strong>Treasure</strong></a>
            </nav>
        </header>
        <div>
            @yield('content')
        </div>
        <footer>
                Welcome to website k-pop!
        </footer>
    </body>
</html>