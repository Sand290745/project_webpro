@extends('layouts.main-admin')

@section('title', $artist->name)

@section('content')

    <a class="back" href="{{ route('artist-detail',['id' => $artist->id])}}"><strong> &lt; Back</strong></a>


<div class="action-bar">
    <a class="link" href="{{ route('artist-add-unit-form',['id' => $artist->id]) }}">
        <button class="action">
            <img src="https://img.icons8.com/material-outlined/24/000000/add.png" />Add Units
        </button>
    </a> 
</div>
    

<table class="list">
    <tr>
        <th>Unit</th>
        <th></th>
    </tr>
    @foreach($units as $unit)
    <tr>
        <td>{{$unit->name}}</td>
        <td> <a href="{{ route('artist-unit-remove', ['unitId'=> $unit->id, 'artistId' => $artist->id,]) }}">Remove</a></td>
    </tr>
    @endforeach
</table>

@endsection