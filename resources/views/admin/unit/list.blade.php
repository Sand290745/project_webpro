@extends('layouts.main-admin')

@section('title','Unit List')

@section('content')

<nav>
    <a class="link" href="{{ route('unit-create-form')}}">New Unit</a>
</nav>

<table class="list">
    <tr>
        <th>logo</th>
        <th>Name</th>
    </tr>

    @foreach($unit as $unit)
    <tr>
        <td><img width="80" src="{{$unit->logo}}" alt=""></td>
        <td><a href="{{ route('unit-detail',['id' => $unit->id ])}}">{{$unit->name}}</a></a> </td>
    </tr>
    @endforeach
</table>

@endsection