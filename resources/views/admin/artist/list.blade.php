@extends('layouts.main-admin')

@section('title','Artist List')

@section('content')

<div class="action-bar">
<a class="link" href="{{ route('artist-create-form')}}">
    <button class="action">
        <img src="https://img.icons8.com/material-outlined/24/000000/add.png" />New Artist
    </button>
</a>

</div>

<table class="list">
    <tr>
        <th>Number</th>
        <th>Name</th>      
        <th>Company</th>
        <th>Sub-units</th>
        <th>Fandom Name</th>
    </tr>
    @foreach($artists as $number => $artist)
    <tr>
        <td>{{$number + 1}}</td>
        <td><a href="{{ route('artist-detail',['id' => $artist->id ])}}">{{$artist->name}}</td>
        <td><a href="{{ route('company-detail',['id' => $artist->group->company->id])}}">{{$artist->group->company->name}}</td>
        <td> 
            @foreach($artist->units as $unit)
                {{$unit->name}}
            @endforeach
        </td>
        <td> {{$artist->group->fandom}} </td>
    </tr>
    @endforeach
</table>

@endsection