<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title> @yield('title') </title>
    <link rel="stylesheet" href="{{ asset('/css/style.css')}}">
</head>

<body>
    <nav class="nav-main">
        <a class="nav-item" href="/home"><strong>Home</strong></a>

        <a class="nav-item" href="{{route('group-list')}}"><strong>Group</strong></a>
        <a class="nav-item" href="{{route('artist-list')}}"><strong>Artist</strong></a>
        <a class="nav-item" href="{{route('company-list')}}"><strong>Company</strong></a>
        <a class="nav-item" href="{{route('unit-list')}}"><strong>Unit</strong></a>
        <a class="nav-item" href="{{route('music-list')}}"><strong>Music</strong></a>
    </nav>

    <main>
        <h1 class="title">
            @yield('title')
        </h1>



        @yield('content')

    </main>
    <!-- <header>
        <nav>
            @foreach(App\Models\Group::all() as $group)
            <a href="/group/{{$group->id}}"><strong>{{$group->name}}</strong></a>
            @endforeach
        </nav>
    </header>
    <div>
        @if(session()->has('status'))
        <div class="status">{{session()->get('status')}}</div>
        @endif

        @error('error')
        <div class="status">{{ $message }}</div>
        @enderror
    </div>
    <h1>@yield('title') </h1>-->
     
</body>

</html>