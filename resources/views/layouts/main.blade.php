<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title> @yield('title') </title>
    <link rel="stylesheet" href="{{ asset('/css/style.css')}}">
    @trixassets
</head>

<body>
    <nav class="nav-main">
        <a class="nav-item" href="/home"><strong>Home</strong></a>

        @foreach(App\Models\Group::all() as $group)
        <a class="nav-item" href="/group/{{$group->id}}"><strong>{{$group->name}}</strong></a>
        @endforeach
    </nav>

    <main>
        <h1 class="title"> @yield('title')</h1>



        @yield('content')

    </main>
    
    <footer>
        Welcome to website k-pop!
    </footer> 
</body>

</html>