@extends('layouts.main')

@section('title','Channels')

@section('content')

<div class="logo-grid">
    @foreach(App\Models\Group::all() as $group)
    <div class="blog-item">
        <a class="channel-name" href="{{route('user-group-detail',['id' => $group->id])}}">
            <img class="channel-logo" src="{{$group->logo}}" alt="">
            <p>{{$group->name}}</p>
        </a>
    </div>
    @endforeach
</div>

<h2 class="blog-home">Album</h2>
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

@endsection