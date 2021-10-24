@extends('layouts.main')

@section('content')

<body>


    <div class="home-banner">
        <div>
            <h1><b>K-Pop</b></h1>
            <h1><b>What Is K-Pop?</b></h1>
            <p><span style="font-size:36px">K-pop is one part of the “Korean Wave”</span> <br> also called Hallyu, a term referring to the popularity of Korean pop culture and Korean TV shows, music, and movies across Asia and other parts of the world. </p>
            <a href="{{route('user-history-detail')}}">
                <button class="button">Read more</button>
            </a>
        </div>
        <div>
            <img src="https://i.pinimg.com/564x/69/b3/4a/69b34a0fad4e0e0b66813706ab439eb8.jpg" width="335" height="471">
        </div>
    </div>


    <h2 class="blog-home">Groups</h2>
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
                <p class="blog-title">{{$blog->title}}</p>
                <p class="name">{{$blog->group->name}}</p>
            </a>
        </div>
        @endforeach
    </div>
</body>
@endsection