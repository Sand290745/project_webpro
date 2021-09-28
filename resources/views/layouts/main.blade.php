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

                <a href="/home"><strong>Home</strong></a>
                <a href="/group/1"><strong>Exo</strong></a>
                <a href="/group/2"><strong>Nct</strong></a>
                <a href="/group/3"><strong>Treasure</strong></a>

            </nav>
        </header>
        <div class="content">
            @yield('content')
        </div>
        <footer>
                Welcome to website k-pop!
        </footer>
    </body>
</html>