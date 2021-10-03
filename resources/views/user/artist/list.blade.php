@extends('layouts.main')

@section('title','Channels')

@section('content')

<div class="logo-grid">
    @foreach($artists  as $artist)
    <div>
        <a class="channel-name" href="{{route('artist-detail',['id' => $artist->id])}}">
            <img class="channel-logo" src="{{$artist->photo}}" alt="">
            <p>{{$artist->name}}</p>
        </a>
    </div>
    @endforeach
</div>

@endsection