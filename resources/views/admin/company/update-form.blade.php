@extends('layouts.main-admin')

@section('title', 'Company : Update')

@section('content')
<form class="form" action="{{ route('company-update-form', ['id' => $company->id])}}" method="post">
    @csrf
    <table class="group">
        <tr>
            <td><strong>logo</strong></td>
            <td><input type="text" name="logo" id="" value="{{ old('logo', $company->logo)}}" required></td>
        </tr>
        <tr>
            <td><strong>Name</strong></td>
            <td><input type="text" name="name" id="" value="{{ old('name', $company->name)}}" required></td>
        </tr>
        <tr>
            <td><strong>Other name</strong></td>
            <td><input type="text" name="other_name" value="{{ old('other_name', $company->other_name)}}"></td>
        </tr>
        <tr>
            <td><strong>Founded</strong></td>
            <td><input type="text" name="founded" value="{{ old('founded', $company->founded)}}" required></td>
        </tr>
        <tr>
            <td><strong>Founder</strong></td>
            <td><input type="text" name="founder" value="{{ old('founder', $company->founder)}}" required></td>
        </tr>
        <tr>
            <td><strong>Location</strong></td>
            <td><input type="text" name="location" value="{{ old('location', $company->location)}}" required></td>
        </tr>
        <tr>
            <td><strong>Description</strong></td>
            <td><textarea name="description" required>{{ old('description', $company->description)}} </textarea></td>
        </tr>
        
    </table>

    <div>
        <button class="submit" type="submit">Update</button>
    </div>
</form>
@endsection