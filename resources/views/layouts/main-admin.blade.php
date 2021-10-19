<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title> @yield('title') </title>
    <link rel="stylesheet" href="{{ asset('/css/style.css')}}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    @trixassets
</head>

<body>
    <nav class="nav-main">
        <div class="nav-item"> <a href="/home"><strong>Home</strong></a></div>
        <div class="nav-item"> <a href="{{route('group-list')}}"><strong>Group</strong></a></div>
        <div class="nav-item"> <a href="{{route('artist-list')}}"><strong>Artist</strong></a></div>
        <div class="nav-item"> <a href="{{route('company-list')}}"><strong>Company</strong></a></div>
        <div class="nav-item"> <a href="{{route('unit-list')}}"><strong>Unit</strong></a></div>
        <div class="nav-item"> <a href="{{route('music-list')}}"><strong>Music</strong></a></div>
        <div class="nav-item"> <a href="{{route('blog-list')}}"><strong>Blog</strong></a></div>
        <div class="nav-item"> <a href="{{route('user-list')}}"><strong>User</strong></a></div>
        <div class="nav-item"> <a href="{{route('logout')}}"><strong>Logout</strong></a></div>
    </nav>

    <main>
        <h1 class="title">
            @yield('title')
        </h1>

        <div>
            @if(session()->has('status'))
            <div class="status"><img src="https://img.icons8.com/ios/30/000000/add-reminder.png"/> {{session()->get('status')}}</div>
            @endif

            @error('error')
            <div class="status-error"><img src="https://img.icons8.com/external-flatart-icons-outline-flatarticons/30/000000/external-alert-basic-ui-elements-flatart-icons-outline-flatarticons-1.png"/>{{ $message }}</div>
            @enderror
        </div>

        @yield('content')

    </main>

</body>

</html>