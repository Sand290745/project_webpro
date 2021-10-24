@extends('layouts.main')

@section('content')

<body>


    <div class="home-banner">
        <div>
            <h1 class="xlarge-font"><b>K-Pop</b></h1>
            <h1 class="large-font"><b>What Is K-Pop?</b></h1>
            <p><span style="font-size:36px">K-pop is one part of the “Korean Wave”</span> also called Hallyu, a term referring to the popularity of Korean pop culture and Korean TV shows, music, and movies across Asia and other parts of the world. </p>
            <a href="{{route('user-history-detail')}}">
                <button class="button">Read more</button>
            </a>
        </div>
        <div>
            <img src="https://s.isanook.com/wo/0/rp/r/w728/ya0xa0m1w0/aHR0cHM6Ly9zLmlzYW5vb2suY29tL3dvLzAvdWQvMjcvMTM1NTY5L2wxLmpwZw==.jpg" width="335" height="471">
        </div>
    </div>


    <h2 class="blog-home">Channels</h2>
    <div class="logo-grid">
        @foreach(App\Models\Group::all() as $group)
        <div class="channel-item">
            <a class="channel-name" href="{{route('user-group-detail',['id' => $group->id])}}">
                <img class="channel-logo" src="{{$group->logo}}" alt="">
                <p>{{$group->name}}</p>
            </a>
        </div>
        @endforeach
    </div>


    <h2 class="blog-home">NEWS</h2>
    <div class="blog-grid">
        @foreach(App\Models\Blog::all() as $blog)
        <div class="blog-item">
            <a class="channel-name" href="{{route('user-blog-detail',['id' => $blog->id])}}">
                <img class="channel-logo" src="{{$blog->photo}}" alt="">
                <p>{{$blog->title}}</p>
                <p class="name">{{$blog->group->name}}</p>
            </a>
        </div>
        @endforeach
    </div>
</body>
@endsection