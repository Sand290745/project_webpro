@extends('layouts.main-admin')

@section('title',$group->name)

@section('content')
<form id="form" class="form" action="" method="get"> 
    <div class="search-box">
            <label for="term">Search</label> 
            <strong class="color">::</strong>
            <input  type="text" name="term" id="term">
            <button form="form" type="submit">Search</button>
    </div>

</form>

<a class="link" href="{{ route('artist-create-form')}}">New Artist</a>
<a href="{{ route('group-update-form',['id' => $group->id])}}">Update</a>
<a href="{{ route('group-delete',['id' => $group->id])}}">Delete</a>

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
        <td>{{$artist->group->company->name}}</td>
        @if($group->units->isNotEmpty())
        <td> 
            @foreach($artist->units as $unit)
                {{$unit->name}}
            @endforeach
        </td>
        @endif
        <td> {{$artist->group->fandom}} </td>
    </tr>
    @endforeach
</table>

@endsection