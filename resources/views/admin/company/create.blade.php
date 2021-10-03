@extends('layouts.main-admin')

@section('title', 'Company : Create')

@section('content')
<form class="form" action="{{ route('company-create') }}" method="post">
    @csrf

    <table>
        <tr>
            <td><strong>logo</strong></td>
            <td><strong>::</strong></td>
            <td><input type="text" name="logo" id="" value="{{ old('logo')}}" required></td>
        </tr>
        <tr>
            <td><strong>Name</strong></td>
            <td><strong>::</strong></td>
            <td><input type="text" name="name" id="" value="{{ old('name')}}" required></td>
        </tr>
        
    </table>

    <div class="actions">
        <button type="submit">Create</button>
    </div>

</form>
@endsection