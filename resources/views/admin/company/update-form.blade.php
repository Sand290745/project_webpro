@extends('layouts.main-admin')

@section('title', 'Company : Update')

@section('content')
<form class="form" action="{{ route('company-update-form', ['id' => $company->id])}}" method="post">
    @csrf
    <table>
        <tr>
            <td><strong>Name</strong></td>
            <td><strong>::</strong></td>
            <td><input type="text" name="name" id="" value="{{ old('name', $company->name)}}" required></td>
        </tr>
        <tr>
            <td><strong>Other name</strong></td>
            <td><strong>::</strong></td>
            <td><input type="text" name="other_name" value="{{ old('other_name', $company->other_name)}}" required></td>
        </tr>
        <tr>
            <td><strong>Founded</strong></td>
            <td><strong>::</strong></td>
            <td><input type="text" name="founded" value="{{ old('founded', $company->founded)}}" required></td>
        </tr>
        <tr>
            <td><strong>Founder</strong></td>
            <td><strong>::</strong></td>
            <td><input type="text" name="founder" value="{{ old('founder', $company->founder)}}" required></td>
        </tr>
        <tr>
            <td><strong>Location</strong></td>
            <td><strong>::</strong></td>
            <td><input type="text" name="location" value="{{ old('location', $company->location)}}" required></td>
        </tr>
        <tr>
            <td><strong>Description</strong></td>
            <td><strong>::</strong></td>
            <td><input type="text" name="description" value="{{ old('description', $company->description)}}" required></td>
        </tr>
        
    </table>

    <div class="actions">
        <button type="submit">Update</button>
    </div>
</form>
@endsection