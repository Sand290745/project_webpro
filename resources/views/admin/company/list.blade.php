@extends('layouts.main-admin')

@section('title','Company List')

@section('content')

<div class="action-bar">
    <a class="link" href="{{ route('company-create-form')}}">
        <button class="action">
            <img src="https://img.icons8.com/material-outlined/24/000000/add.png" />New Company
        </button>
    </a>
</div>



<table class="list">
    <tr>
        <th>logo</th>
        <th>Name</th>
    </tr>

    @foreach($companies as $companies)
    <tr>
        <td><img width="80" src="{{$companies->logo}}" alt=""></td>
        <td><a href="{{route('company-detail',['id' => $companies->id])}}">{{$companies->name}}</a> </td>
    </tr>
    @endforeach
</table>
@endsection