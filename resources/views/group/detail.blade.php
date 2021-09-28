@extends('layouts.main')

@section('title',$group->name)

@section('content')
<form id="form" class="form" action="" method="get">
    <table>
        <tr>
            <td> <label for="term">Search</label> </td>
            <td> <strong class="color">::</strong></td>
            <td> <input class="search" type="text" name="term" id="term"> </td>
        </tr>
    </table>

  <div>
    <button form="form" type="submit">Search</button>
  </div>

</form>

<a class="link" href="{{ route('artist-create-form')}}">New Member</a>

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