@extends('layouts.main-admin')

@section('title', 'Music : Update')

@section('content')
<form class="form" action="{{ route('music-update-form', ['id' => $music->id])}}" method="post">
    @csrf
    <table>
        <tr>
            <td><strong>Name</strong></td>
            <td><strong>::</strong></td>
            <td><input type="text" name="name" id="" value="{{ old('name', $music->name)}}" required></td>
        </tr>
        <tr>
            <td><strong>link</strong></td>
            <td><strong>::</strong></td>
            <td><input type="text" name="link" value="{{ old('link', $music->link)}}" required></td>
        </tr>
        <tr>
            <td><strong>Group</strong></td>
            <td><strong>::</strong></td>
            <td>
                <select name="group_id" required>
                    <option value="">-- Please select group --</option>
                    @foreach($groups as $group)
                    <option value="{{ $group->id }}" {{ ($group->id === old('group_id', $music->group_id))? 'selected' : '' }}>
                        {{ $group->name }}
                    </option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td><strong>Unit</strong></td>
            <td><strong>::</strong></td>
            <td>
                <select name="unit_id" required>
                    <option value="">-- Please select unit--</option>
                    @foreach($units as $unit)
                    <option value="{{ $unit->id }}" {{ ($unit->id === old('unit_id', $music->unit_id))? 'selected' : '' }}>
                        {{ $unit->name }}
                    </option>
                    @endforeach
                </select>
            </td>
        </tr>
    </table>

    <div class="actions">
        <button type="submit">Update</button>
    </div>

</form>
@endsection