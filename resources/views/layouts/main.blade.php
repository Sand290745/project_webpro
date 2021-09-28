<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> @yield('title') </title>
        <link rel="stylesheet" href="{{ asset('/css/app.css')}}">
    </head>
    <body>
        <header>
            <h1>@yield('title') </h1>
            <nav>

                <a href="/home"><strong>Home</strong></a>
                <a href="/group/exo"><strong>Exo</strong></a>
                <a href="/group/nct"><strong>Nct</strong></a>
                <a href="/group/treaure"><strong>Treasure</strong></a>

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