@extends('layouts.main-admin')

@section('title',$unit->name)

@section('content')

<div class="action-bar">
    <a class="link" href="{{ route('unit-update-form',['id' => $unit->id])}}">
        <button class="action">
            <img src="https://img.icons8.com/ios/24/000000/approve-and-update.png"/>Update
        </button>
    </a>

    <a class="link" href="{{ route('unit-delete',['id' => $unit->id])}}">
        <button class="action">
            <img src="https://img.icons8.com/external-kiranshastry-lineal-kiranshastry/24/000000/external-delete-miscellaneous-kiranshastry-lineal-kiranshastry.png"/>Delete
        </button>
    </a>
</div>



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
        <td><a href="{{ route('company-detail',['id' => $artist->group->company->id])}}">{{$artist->group->company->name}}</td>
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