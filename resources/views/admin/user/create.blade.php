@extends('layouts.main-admin')

@section('title','User : Create')

@section('content')
<form class="form" action="{{ route('user-create') }}" method="post">
    @csrf
<table class="group">
    <tr>
        <td><strong>E-mail</strong></td>
        <td><strong class="color">::</strong></td>
        <td><input type="text" name="email" id="" value="{{ old('email')}}" required></td>
    </tr>
    <tr>
        <td><strong>Name</strong></td>
        <td><strong class="color">::</strong></td>
        <td><input type="text" name="name" value="{{ old('name')}}" required></td>
    </tr> 
    <tr>
        <td><strong>Password</strong></td>
        <td><strong class="color">::</strong></td>
        <td><input type="password" name="password" value="{{ old('password')}}" required></td>
    </tr>

</table>

    <div class="actions">
        <input type="submit" value="Create">
    </div>

</form>
@endsection