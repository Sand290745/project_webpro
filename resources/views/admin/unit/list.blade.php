@extends('layouts.main-admin')

@section('title','Unit List')

@section('content')

<div class="action-bar">
    <a class="link" href="{{ route('unit-create-form')}}">
        <button class="action">
            <img src="https://img.icons8.com/material-outlined/24/000000/add.png" />New Unit
        </button>
    </a>
</div>
    


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