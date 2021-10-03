@extends('layouts.main-admin')

@section('title',"{$music->name}" )

@section('content')
<nav>
    <a href="{{ route('music-update-form',['id' => $music->id])}}">Update</a>
    <a href="{{ route('music-delete',['id' => $music->id])}}">Delete</a>
</nav>

<iframe width="560" height="315" src="https://www.youtube.com/embed/{{$music->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<table class="list">
    <tr>
        <td><strong>Name</strong></td>
        <td><strong>::</strong></td>
        <td>{{$music->name}}</td>
    </tr>
    <tr>
        <td><strong>link</strong></td>
        <td><strong>::</strong></td>
        <td><a href="">{{$music->link}}</td>
    </tr>
    
</table>
@endsection