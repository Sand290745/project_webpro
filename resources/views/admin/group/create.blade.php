@extends('layouts.main-admin')

@section('title', 'Group : Create')

@section('content')
<form class="form" action="{{ route('group-create') }}" method="post">
    @csrf

    <table class="group">
        <tr>
            <td><strong>Logo</strong></td>
            <td><input type="text" name="logo" id="" value="{{ old('logo')}}" required></td>
        </tr>
        <tr>
            <td><strong>Group Name</strong></td>
            <td><input type="text" name="name" id="" value="{{ old('name')}}" required></td>
        </tr>

        <tr>
            <td><strong>fandom</strong></td>
            <td><input type="text" name="fandom" value="{{ old('fandom')}}" required></td>
        </tr>

        <tr>
            <td><strong>Company</strong></td>
            <td>
                <select name="company_id" required>
                    <option value="">Please select company</option>
                    @foreach($companies as $company)
                    <option value="{{ $company->id }}" {{ ($company->id === old('company'))? 'selected' : '' }}>
                        {{ $company->name }}
                    </option>
                    @endforeach
                </select>
            </td>
        </tr>
    </table>

    <button class="submit" type="submit">Create</button>


</form>
@endsection