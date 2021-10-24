<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title> @yield('title') </title>
    <link rel="stylesheet" href="{{ asset('/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/drop-down.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/gallery.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/profile.css')}}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    @trixassets
</head>

<body>
    <nav class="nav-main">
        <div class="nav-item">
            <a href="/home"><strong>Home</strong></a>
        </div>

        @foreach(App\Models\Group::all() as $group)
        <div class="dropdown nav-item">
            <a href="/group/{{$group->id}}">
                <span>{{$group->name}}</span>
            </a>

            <div class="dropdown-content">
                @foreach($group->units as $unit)
                <div>
                    <a href="{{route('user-unit-detail',['id' => $unit->id])}}">{{$unit->name}}</a>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </nav>

    <main>
        <h1 class="title"> @yield('title')</h1>

        @yield('content')

    </main>

    <footer class="footer">
        Welcome to website k-pop!
    </footer>
</body>

</html>