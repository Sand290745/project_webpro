@extends('layouts.main-admin')

@section('title','User : List')

@section('content')

<nav>
    <a  href="{{ route('user-create-form')}}">New User</a>
</nav>
    

<table class="list">
    <tr>
        <th>Name</th>
        <th>E-mail</th>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{$user->name}}</td>
        <td><a href="{{ route('user-detail',['email' => $user->email ])}}">{{$user['email']}}</a></td>
    </tr>
    @endforeach
</table>

@endsection