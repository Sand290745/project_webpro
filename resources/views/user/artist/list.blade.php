@extends('layouts.main')

@section('title','Artists')

@section('content')

<div class="logo-grid">
    
    @foreach($artists  as $artist)
    <div>
        <a class="channel-name" href="{{route('user-artist-detail',['id' => $artist->id])}}">
            <img class="channel-logo" src="{{$artist->photo}}" alt="">
            <p>{{$artist->name}}</p>
        </a>
    </div>
    @endforeach
</div>

@endsection