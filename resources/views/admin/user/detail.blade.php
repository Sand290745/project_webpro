@extends('layouts.main-admin')

@section('title', $user->name)

@section('content')

<nav>
    <a href="{{ route('user-update-form',['email' => $user->email])}}">Update</a>
    <a href="{{ route('user-delete',['email' => $user->email])}}">Delete</a>
</nav>

<table>
    <tr>
        <td><strong>E-mail</strong></td>
        <td><strong>::</strong></td>
        <td>{{$user->email}}</td>
    </tr>
    <tr>
        <td><strong>Name</strong></td>
        <td><strong>::</strong></td>
        <td>{{$user->name}}</td>
    </tr>
</table>

@endsection