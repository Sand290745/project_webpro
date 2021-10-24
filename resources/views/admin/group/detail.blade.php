@extends('layouts.main-admin')

@section('title',$group->name)

@section('content')

<div class="action-bar">
    <a class="link" href="{{ route('artist-create-form')}}">
        <button class="action">
            <img src="https://img.icons8.com/material-outlined/24/000000/add.png" />New Artist
        </button>
    </a>

    <a href="{{ route('group-update-form',['id' => $group->id])}}">
        <button class="action">
            <img src="https://img.icons8.com/ios/24/000000/approve-and-update.png"/>Update
        </button>
    </a>

    <a href="{{ route('group-delete',['id' => $group->id])}}">
        <button class="action">
            <img src="https://img.icons8.com/external-kiranshastry-lineal-kiranshastry/24/000000/external-delete-miscellaneous-kiranshastry-lineal-kiranshastry.png"/>Delete
        </button>
    </a>
</div>


<table class="list">
    <tr>
        <th>Number</th>
        <th>Name</th>      
        <th>Company</th>
        @if($group->units->isNotEmpty())
        <th>Sub-units</th>
        @endif
        <th>Fandom Name</th>
    </tr>
    @foreach($group->artists as $number => $artist)
    <tr>
        <td>{{$number + 1}}</td>
        <td><a href="{{ route('artist-detail',['id' => $artist->id ])}}">{{$artist->name}}</td>
        <td><a href="{{ route('company-detail',['id' => $artist->group->company->id])}}">{{$artist->group->company->name}}</td>
        @if($group->units->isNotEmpty())
        <td> 
            @foreach($artist->units as $unit)
                <a href="{{ route('unit-detail',['id' => $unit->id ])}}">{{$unit->name}}</a>
            @endforeach
        </td>
        @endif
        <td> {{$artist->group->fandom}} </td>
    </tr>
    @endforeach
</table>

@endsection