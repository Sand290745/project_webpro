@extends('layouts.main-admin')

@section('title', 'Company : Create')

@section('content')
<form class="form" action="{{ route('company-create') }}" method="post">
    @csrf

    <table class="group">
        <tr>
            <td><strong>logo</strong></td>
            <td><input type="text" name="logo" id="" value="{{ old('logo')}}" required></td>
        </tr>
        <tr>
            <td><strong>Name</strong></td>
            <td><input type="text" name="name" id="" value="{{ old('name')}}" required></td>
        </tr>
        <tr>
            <td><strong>Other name</strong></td>
            <td><input type="text" name="other_name" value="{{ old('other_name')}}"></td>
        </tr>
        <tr>
            <td><strong>Founded</strong></td>
            <td><input type="text" name="founded" value="{{ old('founded')}}" required></td>
        </tr>
        <tr>
            <td><strong>Founder</strong></td>
            <td><input type="text" name="founder" value="{{ old('founder')}}" required></td>
        </tr>
        <tr>
            <td><strong>Location</strong></td>
            <td><input type="text" name="location" value="{{ old('location')}}" required></td>
        </tr>
        <tr>
            <td><strong>Description</strong></td>
            <td><textarea name="description" required>{{ old('description')}}</textarea> </td>
        </tr>
        
    </table>

    <div>
        <button class="submit" type="submit">Create</button>
    </div>

</form>
@endsection