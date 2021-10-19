@extends('layouts.main-admin')

@section('title','User : Update')

@section('content')
<form class="form" action="{{ route('user-update',['email' => $user['email']]) }}" method="post">
    @csrf
<table class="group">
    <tr>
        <td><strong>E-mail</strong></td>
        <td><input type="text" name="email" value="{{ old('email', $user->email)}}" required></td>
    </tr>
    <tr>
        <td><strong>Name</strong></td>
        <td><input type="text" name="name" value="{{ old('name', $user->name)}}" required></td>
    </tr> 
    <tr>
        <td><strong>Password</strong></td>
        <td><input type="password" name="password" value="{{ old('password', $user->password)}}"></td>
    </tr>
</table>

<div>
    <button class="submit" type="submit">Update</button>
</div>
</form>
@endsection