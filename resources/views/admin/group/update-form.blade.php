@extends('layouts.main-admin')

@section('title', 'Group : Update')

@section('content')
<form class="form" action="{{ route('group-update-form', ['id' => $group->id])}}" method="post">
    @csrf

    <table class="group">
        <tr>
            <td><strong>logo</strong></td>
            <td><input type="text" name="logo" id="" value="{{ old('logo', $group->logo)}}" required></td>
        </tr>
        <tr>
            <td><strong>Group Name</strong></td>
            <td><input type="text" name="name" value="{{ old('name', $group->name)}}" required></td>
        </tr>
        <tr>
            <td><strong>fandom</strong></td>
            <td><input type="text" name="fandom" value="{{ old('fandom', $group->fandom)}}" required></td>
        </tr>
        <tr>
            <td><strong>Company</strong></td>
            <td>
                <select name="company_id" required>
                    @foreach($companies as $company)
                    <option value="{{ $company->id }}" {{ ($company->id === old('company', $group->company_id))? 'selected' : '' }}>
                        {{ $company->name }}
                    </option>
                    @endforeach
                </select>
            </td>
        </tr>
    </table>

    <div>
        <button class="submit" type="submit">Update</button>
    </div>

</form>
@endsection