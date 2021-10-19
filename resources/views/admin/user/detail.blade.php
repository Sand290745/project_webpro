@extends('layouts.main-admin')

@section('title', $user->name)

@section('content')

<div class="action-bar">
    <a href="{{ route('user-update-form',['email' => $user->email])}}">
        <button class="action">
            <img src="https://img.icons8.com/ios/24/000000/approve-and-update.png"/>Update
        </button>
    </a>

    <a href="{{ route('user-delete',['email' => $user->email])}}">
        <button class="action">
            <img src="https://img.icons8.com/external-kiranshastry-lineal-kiranshastry/24/000000/external-delete-miscellaneous-kiranshastry-lineal-kiranshastry.png"/>Delete
        </button>
    </a>
</div>

<img class="img-box" src="{{$user->photo}}" alt="">

<table class="list">
    <tr>
        <td><strong>E-mail</strong></td>
        <td>{{$user->email}}</td>
    </tr>
    <tr>
        <td><strong>Name</strong></td>
        <td>{{$user->name}}</td>
    </tr>
</table>

@endsection