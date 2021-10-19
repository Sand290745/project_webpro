@extends('layouts.main')

@section('title',$unit->name)

@section('content')

<div class="logo-grid">
    @foreach($artists as $artist)
    <div>
        <a class="channel-name" href="{{route('user-artist-detail',['id' => $artist->id])}}">
            <img class="artist-photo" src="{{$artist->photo}}" alt="">
            <p>{{$artist->name}}</p>
        </a>
    </div>
    @endforeach
</div>

<h1>Music</h1>
<div class="video-container">
    @foreach($music as $m)
    <div class="video">
    <iframe width="500" height="300" src="https://www.youtube.com/embed/{{$m->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <a class="m-name" href="https://www.youtube.com/watch?v={{$m->link}}"><p>{{$m->name}}</p></a>
    </div>
    @endforeach
</div>

@endsection