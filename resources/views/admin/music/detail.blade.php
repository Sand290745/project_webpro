@extends('layouts.main-admin')

@section('title',"{$music->name}" )

@section('content')

<div class="action-bar">
    <a href="{{ route('music-update-form',['id' => $music->id])}}">
        <button class="action">
            <img src="https://img.icons8.com/ios/24/000000/approve-and-update.png"/>Update
        </button>
    </a>
    <a href="{{ route('music-delete',['id' => $music->id])}}">
        <button class="action">
            <img src="https://img.icons8.com/external-kiranshastry-lineal-kiranshastry/24/000000/external-delete-miscellaneous-kiranshastry-lineal-kiranshastry.png"/>Delete
        </button>
    </a>
</div>


<iframe width="560" height="315" src="https://www.youtube.com/embed/{{$music->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<table class="list">
    <tr>
        <td><strong>Name</strong></td>
        <td>{{$music->name}}</td>
    </tr>
    <tr>
        <td><strong>Group</strong></td>
        <td><a href="{{ route('group-detail',['id' => $music->group->id ])}}">{{$music->group->name}}</a></td>
    </tr>
    <tr>
        <td><strong>Unit</strong></td>
        <td><a href="{{ route('unit-detail',['id' => $music->unit->id ])}}">{{$music->unit->name}}</a></td>
    </tr>
    
</table>
@endsection