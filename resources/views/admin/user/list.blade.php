@extends('layouts.main-admin')

@section('title','User List')

@section('content')
<div class="action-bar">
    <a  href="{{ route('user-create-form')}}">
        <button  class="action">
            <img src="https://img.icons8.com/material-outlined/24/000000/add.png" />New User
        </button>
    </a>
</div>
    

    

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