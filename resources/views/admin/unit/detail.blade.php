@extends('layouts.main-admin')

@section('title',$unit->name)

@section('content')

<nav>
<a class="link" href="{{ route('unit-update-form',['id' => $unit->id])}}">Update</a>
<a class="link" href="{{ route('unit-delete',['id' => $unit->id])}}">Delete</a>
</nav>
<img class="unit-photo" src="{{$unit->photo}}" alt="">

<table class="list">
    <tr>
        <th>Number</th>
        <th>Name</th>      
        <th>Company</th>
        <th>Sub-units</th>
        <th>Fandom Name</th>
        <th></th>
    </tr>
    @foreach($artists as $number => $artist)
    <tr>
        <td>{{$number + 1}}</td>
        <td><a href="{{ route('artist-detail',['id' => $artist->id ])}}">{{$artist->name}}</td>
        <td>{{$artist->group->company->name}}</td>
        <td> 
            @foreach($artist->units as $unit)
                {{$unit->name}}
            @endforeach
        </td>
        <td> {{$artist->group->fandom}} </td>
        <td> <a href="{{ route('unit-remove', ['unitId'=> $unit->id, 'artistId' => $artist->id,]) }}">Remove</a></td>
    </tr>
    @endforeach
</table>

@endsection