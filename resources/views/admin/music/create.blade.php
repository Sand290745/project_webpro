@extends('layouts.main-admin')

@section('title', 'Music : Create')

@section('content')
<form class="form" action="{{ route('music-create') }}" method="post">
    @csrf

    <table>
        <tr>
            <td><strong>Name</strong></td>
            <td><strong>::</strong></td>
            <td><input type="text" name="name" id="" value="{{ old('name')}}" required></td>
        </tr>
        <tr>
            <td><strong>link</strong></td>
            <td><strong>::</strong></td>
            <td><input type="text" name="link" id="" value="{{ old('link')}}" required></td>
        </tr>
        <tr>
            <td><strong>Group</strong></td>
            <td><strong>::</strong></td>
            <td>
                <select name="group_id" required>
                    <option value="">-- Please select group --</option>
                    @foreach($groups as $group)
                    <option value="{{ $group->id }}" {{ ($group->id === old('group'))? 'selected' : '' }}>
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
                    <option value="{{ $unit->id }}" {{ ($unit->id === old('unit'))? 'selected' : '' }}>
                        {{ $unit->name }}
                    </option>
                    @endforeach
                </select>
            </td>
        </tr>

    </table>

    <div class="actions">
        <button type="submit">Create</button>
    </div>

</form>
@endsection