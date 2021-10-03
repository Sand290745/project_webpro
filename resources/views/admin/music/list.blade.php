@extends('layouts.main-admin')

@section('title','Music List')

@section('content')

<a class="link" href="{{ route('music-create-form')}}">New Music</a>


<table class="list">
    <tr>
        <th>Name</th>
        <th>View on youtube</th>
        <th>Group</th>
        <th>Unit</th>
    </tr>

    @foreach($music as $music)
    <tr>
        <td><a href="{{ route('music-detail',['id' => $music->id ])}}">{{$music->name}}</a> </td>
        <td><a href="https://www.youtube.com/watch?v={{$music->link}}">Watch video</a></td>
        <td><a href="{{ route('group-detail',['id' => $music->group->id ])}}">{{$music->group->name}}</a></td>
        <td><a href="{{ route('unit-detail',['id' => $music->unit->id ])}}">{{$music->unit->name}}</a></td>
    </tr>
    @endforeach
</table>

@endsection