@extends('layouts.main-admin')

@section('title', 'Unit : Update')

@section('content')
<form class="form" action="{{ route('unit-update-form', ['id' => $unit->id])}}" method="post">
    @csrf
    <table class="group">
        <tr>
            <td><strong>Name</strong></td>
            <td><input type="text" name="name" id="" value="{{ old('name', $unit->name)}}" required></td>
        </tr>
        <tr>
            <td><strong>logo</strong></td>
            <td><input type="text" name="logo" value="{{ old('logo', $unit->logo)}}" required></td>
        </tr>
        <tr>
            <td><strong>Photo</strong></td>
            <td><input type="text" name="photo" id="" value="{{ old('photo', $unit->photo)}}" required></td>
        </tr>
        <tr>
            <td><strong>Group</strong></td>
            <td>
                <select name="group_id" required>
                    @foreach($groups as $group)
                    <option value="{{ $group->id }}" {{ ($group->id === old('group_id', $unit->group_id))? 'selected' : '' }}>
                        {{ $group->name }}
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